<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test WBE</title>
	<!-- Add script to header tag-->
<script type="text/javascript" src="https://staygrid.com/V2/js/hapi/web.js?v=2n5202301171"></script>
                <script type="text/javascript">
                    var hlWebEngine = new HotelogixWeb();    
                    function drawEngine()
                    {
                        var options = {
                                version: 3.0,
                                domain: "https://booking.staygrid.com",
                                container: document.getElementById("webDiv"),
                                key: "VGlzMlhYcVlBTmN0bmpuclkrMUVhQ1piSXpmL1lhMk5OcTcybDFPNXNEemJjNThzSjhFSTNGNVJKSVI4Vy85WG5LWmhaL1k5SnJCNitjUmpFeDVydDc0SmgwRnZOdWZhQ1FheTVxSEtleGt5b0NtelFncDNFVzBRVWFRaUJyTTk",
                                languageCode: "en"
                            };
                        hlWebEngine.draw(options);
                    }
                    hlWebEngine.run(drawEngine);
                </script>
<!--Div that will hold the web engine-->
<div id="webDiv" style="border-width: 0"></div>
</head>
<body>

</body>
</html>