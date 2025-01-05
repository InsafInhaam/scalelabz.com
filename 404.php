<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package codexlab
 */

get_header();
?>

<style>
	.not-found-page-container {
		text-align: center;
		margin-top: 100px;
	}

	.not-found-page-container h1 {
		font-size: 8rem;
		font-weight: bold;
		color: #4d69e9;
	}

	.not-found-page-container h2 {
		font-size: 2rem;
		margin-bottom: 20px;
		color: #fff;
	}

	.not-found-page-container p {
		font-size: 1.2rem;
		color: #777;
	}

	.not-found-page-container .btn {
		display: inline-block;
		margin-top: 30px;
		padding: 10px 25px;
		font-size: 1rem;
		background-color: #ff6b6b;
		color: #fff;
		text-decoration: none;
		border-radius: 5px;
		transition: background-color 0.3s ease;
	}

	.not-found-page-container .btn:hover {
		background-color: #4d69e9;
	}

	.not-found-page-container .animation {
		animation: float 2s infinite ease-in-out;
	}

	@keyframes float {

		0%,
		100% {
			transform: translateY(0);
		}

		50% {
			transform: translateY(-20px);
		}
	}
</style>
<main id="primary" class="site-main">
	<!-- 404 -->
	<div class="not-found-page-container">
		<h1 class="animation">404</h1>
		<h2>Oops! Page Not Found</h2>
		<p>The page you are looking for does not exist or has been moved.</p>
		<a href="/" class="btn">Go Back Home</a>
	</div>

	<!-- 404 end -->
</main>
<!-- #main -->

<?php
get_footer();
