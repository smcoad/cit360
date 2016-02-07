<!DOCTYPE html>
<!--
This program uses simple JSON serialization to track my own personal schedule for this class. 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>JSON serialization</title>
    </head>
    <body>
        <h1>My Schedule</h1>
        
        <div id="display"></div> <!-- This is where the json object will display in the html-->
            <script>
<!-- This script first creates the var and assigns an array to it.-->
                var sched = '{"schedule":[' + 
                        '{"tech":"JSON Serialization","week":"4"},' +
                        '{"tech":"HTTP URL Connection","week":"5"},' +
                        '{"tech":"Application Controller Pattern","week":"6"}]}';
<!-- Then the object is created and the information from the array is pulled and set up to display in the above div-->
                obj = JSON.parse(sched);
                document.getElementById("display").innerHTML =
                        "week " + obj.schedule[0].week + " - " + obj.schedule[0].tech + "<br>" +
                        "week " + obj.schedule[1].week + " - " + obj.schedule[1].tech + "<br>" +
                        "week " + obj.schedule[2].week + " - " + obj.schedule[2].tech;
            </script>

        
    </body>
</html>
