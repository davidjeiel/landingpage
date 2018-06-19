	</body>
	<footer>
		<div class="footer">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script>
				var video = document.getElementById("myVideo");
				var btn = document.getElementById("myBtn");

				function myFunction() {
				  if (video.paused) {
				    video.play();
				    btn.innerHTML = "Pause";
				  } else {
				    video.pause();
				    btn.innerHTML = "Play";
				  }
				}
			</script>
		</div>			
	</footer>
</html>