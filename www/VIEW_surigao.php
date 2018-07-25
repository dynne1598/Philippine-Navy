<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="VIEW.css" />
</head>
<body>
<button id="exportButton" class="display-size">Export to PDF</button>

<center>
<table id="myTable" class="table">
		<thead class="thead-dark">
			<th scope="col">QTY</th>
			<th scope="col">U/I</th>
			<th scope="col">DESCRIPTION</th>
			<th scope="col">MODEL</th>
			<th scope="col">SERIAL-NO.</th>
			<th scope="col">REMARKS</th>
		</thead>	
	</table>
</center>

<script type="text/javascript">
    jQuery(function ($) {
        $("#exportButton").click(function () {
            // parse the HTML table element having an id=exportTable
            var dataSource = shield.DataSource.create({
                data: "#exportTable",
                schema: {
                    type: "table",
                    fields: {
                        QUANTITY: { type: Number },
                        U/I: { type: String },
                        DESCRIPTION: { type: String }
                        MODEL: { type: String }
                        SERIAL-NO: { type: Number } 
                        REMARKS: { type: String }
                    }
                }
            });

            // when parsing is done, export the data to PDF
            dataSource.read().then(function (data) {
                var pdf = new shield.exp.PDFDocument({
                    author: "PrepBootstrap",
                    created: new Date()
                });

                pdf.addPage("a4", "portrait");

                pdf.table(
                    50,
                    50,
                    data,
                    [
                        { field: "QUANTITY", title: "qty", width: 200 },
                        { field: "U/I", title: "u/i", width: 50 },
                        { field: "DESCRIPTION", title: "description", width: 200 }
                        { field: "MODEL", title: "model", width: 300 }
                        { field: "SERIAL-NO", title: "serial", width: 200 }
                        { field: "REMARKS", title: "remarks", width: 200 }
                    ],
                    {
                        margins: {
                            top: 50,
                            left: 50
                        }
                    }
                );

                pdf.saveAs({
                    fileName: "surigaoPDF"
                });
            });
        });
    });
</script>
</body>
</html>

