
 <!-- section for botttom navbar -->
 <nav class="navbar fixed-bottom navbar-light bg-light">
  <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  Friends List
</a>


<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Suggested Friends</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    
    <div id="friendsList"></div>
 
  </div>
</div>



<!-- section for right toggle -->
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Friends Online</button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Offcanvas right</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
   
  </div>
</div>
<!-- section for right toggle -->


</nav>
 <!-- section for botttom navbar -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>


<script type="text/javascript">
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});

$(document).ready(function(){
    function fetchFriends() {
        $.ajax({
            url: 'fetchAllFriends.php',
            method: 'GET',
            success: function(data) {
                $('#friendsList').html(data); // Ensure correct ID is used
            },
            error: function(xhr, status, error) {
                console.log('Data Error:', error);
            }
        });
    }

    fetchFriends(); // Initial fetch when the page loads
    setInterval(fetchFriends, 2000); // Auto-refresh every 5 sec
});
</script>