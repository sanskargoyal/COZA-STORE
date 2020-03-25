	</div>
</div>
<script>
	var coll = document.getElementsByClassName("collapsible");
	var i;

	for (i = 0; i < coll.length; i++) {
		coll[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var content = this.nextElementSibling;
			if (content.style.display === "block") {
				content.style.display = "none";
			} else {
				content.style.display = "block";
			}
		});
	}
</script>


<script src="../js/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>


<script src="../js/all.min.js"></script>

<script>
	$(document).ready( function () {
		$('#myTable').DataTable();
	} );
</script>
</body>
</html>