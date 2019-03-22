<html>
	<head>
		<link rel="icon" href="https://cdn-static-1.medium.com/_/fp/icons/favicon-rebrand-medium.3Y6xpZ-0FSdWDnPM3hSBIA.ico" class="js-favicon">
		<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> <!--Replace with your tailwind.css once created-->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
	</head>
	<body>
		@yield('content')
		<script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
		<script src="https://unpkg.com/tippy.js@4"></script>
		<script>
			tippy('.avatar')
		</script>
	</body>
</html>