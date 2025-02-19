<?php
if ( ! isset( $data['current_plugin'] ) ) {
	return;
}

$current_plugin = $data['current_plugin'];
?>
<header>
	<div class="title-section">
		<h2><?php esc_html_e( 'Migration', 'learnpress-import-export' ); ?></h2>
		<p class="description"><?php echo esc_html( $current_plugin['desc'] ); ?></p>
	</div>
	<div class="logo-section">
		<svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path
				d="M2.08987 24C2.08987 36.4751 12.203 46.5882 24.6781 46.5882V48C11.4233 48 0.678101 37.2548 0.678101 24H2.08987Z"
				fill="#2271B1"/>
			<path
				d="M47.2663 24C47.2663 11.5249 37.1532 1.41176 24.6781 1.41176V0C37.9329 0 48.6781 10.7452 48.6781 24H47.2663Z"
				fill="#2271B1"/>
			<path
				d="M0.678101 12C0.678101 5.37258 6.05068 0 12.6781 0C19.3055 0 24.6781 5.37258 24.6781 12C24.6781 18.6274 19.3055 24 12.6781 24C6.05068 24 0.678101 18.6274 0.678101 12Z"
				fill="#2271B1"/>
			<g>
				<path
					d="M18.9855 12.3336C19.0255 10.0203 17.621 8.07855 15.7509 6.86901V5.16964H17.1995C17.2237 5.16964 17.5636 4.96638 17.6094 4.9164C18.0084 4.48823 17.856 3.70435 17.2653 3.52942L8.03296 3.53275C7.5648 3.72768 7.34072 4.25332 7.53731 4.73397C7.58479 4.85059 7.918 5.16964 8.01213 5.16964H9.54323V6.99396C5.55305 9.13483 5.18152 14.5228 8.50695 17.5242C10.5404 19.3593 14.1798 20.2815 16.8697 20.4223C17.5594 20.4589 18.8797 20.668 18.9814 19.8033C19.2454 17.5417 18.9855 12.3336 18.9855 12.3336ZM11.1993 5.16964H14.0957V6.24757C13.1077 5.96768 12.2789 6.18426 11.3226 6.2484C11.1501 6.26007 11.2159 6.24674 11.1984 6.12595C11.1568 5.83606 11.2293 5.47036 11.1993 5.16964ZM17.3645 14.2046C15.476 19.4193 7.58729 18.109 7.52065 12.5061C7.50149 10.8667 8.37616 8.42343 10.4529 9.10817C12.6271 9.8254 11.6458 13.2591 11.8574 14.9968C11.8749 15.1368 11.9507 15.33 12.0531 15.4225C12.473 15.8073 13.1694 15.6066 13.3335 15.0584C13.6142 13.3066 12.5313 9.84206 14.7588 9.10817C17.4886 8.20934 18.0359 12.3511 17.3645 14.2046Z"
					fill="white"/>
				<path
					d="M10.4362 13.7323C10.2904 14.3837 9.33996 14.5053 8.97677 13.903C8.6927 13.4332 8.68021 11.4056 9.07589 11.0016C9.46742 10.6018 10.3113 10.8034 10.4362 11.3631C10.502 11.6547 10.502 13.4407 10.4362 13.7323Z"
					fill="white"/>
				<path
					d="M16.3132 13.7323C16.1416 14.4978 14.8921 14.4803 14.7629 13.6623C14.708 13.3166 14.698 11.6747 14.7596 11.3473C14.7979 11.1482 15.1186 10.8684 15.3136 10.8242C15.7642 10.7217 16.2507 10.9575 16.3257 11.4331C16.3807 11.7788 16.384 13.4141 16.3132 13.7323Z"
					fill="white"/>
			</g>
			<path
				d="M24.6781 36C24.6781 29.3726 30.0507 24 36.6781 24C43.3055 24 48.6781 29.3726 48.6781 36C48.6781 42.6274 43.3055 48 36.6781 48C30.0507 48 24.6781 42.6274 24.6781 36Z"
				fill="#2271B1"/>
			<g>
				<path
					d="M45.1487 32.7976V32.4992L36.6901 29.0492L28.2315 32.4464L28.2075 32.8352L29.3132 33.2977C29.2724 34.1946 29.27 35.0963 29.2332 35.9932C29.1604 37.7654 29.058 39.54 28.9948 41.3234C28.9756 41.8555 28.694 42.5228 29.15 42.9508H30.823L30.987 42.518L30.827 37.943C32.6696 37.5998 34.7019 38.4223 35.9172 39.8105C36.1212 40.0441 36.3917 40.6513 36.6757 40.6521C37.0205 40.6529 37.0045 40.3601 37.159 40.1713C38.2143 38.8807 39.7321 37.9262 41.4507 37.8566C42.5804 37.8102 42.958 38.2967 42.5076 36.7277C42.4012 36.3596 41.7467 34.7891 41.3723 34.7539L36.6749 36.5781L31.9768 34.7003C31.8383 34.7107 31.3047 35.6348 31.2063 35.8164C31.1559 35.91 30.899 36.7645 30.7438 36.5861L30.6638 33.8818L36.7509 36.1868L45.1487 32.7976ZM36.0788 32.132C36.4373 32.0215 36.6957 31.8999 37.0742 32.0527C37.795 32.3448 36.1172 32.7072 36.0788 32.132Z"
					fill="white"/>
			</g>
			<path fill-rule="evenodd" clip-rule="evenodd"
				  d="M44.9445 21.2569L46.0588 20.3901L47.9722 22.8502L49.8856 20.3901L51 21.2569L47.9722 25.1497L44.9445 21.2569Z"
				  fill="#2271B1"/>
			<path fill-rule="evenodd" clip-rule="evenodd"
				  d="M21.8709 50.5L21.0042 49.3856L23.4642 47.4722L21.0042 45.5588L21.8709 44.4444L25.7637 47.4722L21.8709 50.5Z"
				  fill="#2271B1"/>
		</svg>
	</div>
</header>
