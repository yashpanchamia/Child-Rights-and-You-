<!DOCTYPE html>
<html>
        <head>
            <title>CRY | Locate</title>
            <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
        </head>
        <body>
        <form action="loc.php" method="get">
            <label for="searchTextField">Please insert an address:</label>
            <input id="searchTextField" type="text" size="50" name="location" required>
            <input type="submit" value = "Submit">
        </form>
        </body>
        <script type="text/javascript">
function initialize() {
    var input = document.getElementById('searchTextField');
    // var options = {componentRestrictions: {country: 'us'}};
                 
    new google.maps.places.Autocomplete(input);
}
             
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</html>