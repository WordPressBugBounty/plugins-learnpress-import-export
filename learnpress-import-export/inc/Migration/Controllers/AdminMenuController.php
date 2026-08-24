<?php

namespace LPImportExport\Migration\Controllers;

use LPImportExport\Migration\Helpers\Config;
use LPImportExport\Migration\Helpers\General;
use LPImportExport\Migration\Helpers\MasterStudy;
use LPImportExport\Migration\Helpers\Page;
use LPImportExport\Migration\Helpers\Template;
use LPImportExport\Migration\Helpers\Tutor;
use LPImportExport\Migration\Models\TutorCourseItemModel;
use LPImportExport\Migration\Models\TutorCourseModel;
use LPImportExport\Migration\Models\TutorSectionModel;
use WPEMS\Models\UserModel;

class AdminMenuController {
	private $active_plugins;

	public function __construct() {
		$this->active_plugins = Config::instance()->get( 'migration-plugin' );
		add_filter( 'learn-press/wp-menus', array( $this, 'register' ) );
	}

	/**
	 * @param array $menu_items
	 *
	 * @return array
	 */
	public function register( array $menu_items = array() ): array {
		if ( empty( count( $this->active_plugins ) ) ) {
			return $menu_items;
		}

		$menu_items['migration-tool'] = array(
			'id'         => 'lp-migration-tool',
			'menu_title' => esc_html__( 'Migration Tool', 'learnpress-import-export' ),
			'page_title' => esc_html__( 'Migration Tool', 'learnpress-import-export' ),
			'capability' => UserModel::ROLE_ADMINISTRATOR,
			'priority'   => 10,
			'callback'   => array( $this, 'migration_tool' ),
		);

		return $menu_items;
	}

	/**
	 * @return void
	 */
	public function migration_tool() {
		ob_start();
		$data['plugins']        = $this->active_plugins;
		$current_plugin         = Page::get_current_plugin_by_page_url();
		$data['current_plugin'] = $current_plugin;

		if ( isset( $current_plugin['name'] ) ) {
			$plugin_name     = $current_plugin['name'];
			$migrated_course = get_option( $plugin_name . '_migrated_course', array() );

			$data['migrated_course'] = $migrated_course;
			if ( $current_plugin['name'] === 'tutor' ) {
				$data = array_merge( $data, Tutor::get_data() );
			} elseif ( $current_plugin['name'] === 'learndash' ) {
				$data = array_merge( $data, \LPImportExport\LearnDashMigration\LearnDashHelper::get_data() );
			} elseif ( $current_plugin['name'] === 'master_study' ) {
				$data = array_merge( $data, MasterStudy::get_data() );
			}
		}

		Template::instance()->get_admin_template( 'migration.php', compact( 'data' ) );
		echo General::ksesHTML( ob_get_clean() );
	}
}
