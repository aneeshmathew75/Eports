<?php
include '../include/connection.php';
$userId = $_SESSION['userid'];
$reg_fee = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<script type="text/javasscript">
  window.history.forward();
function noback()
{
window.history.forward();
}
</script>

<head>
  <meta charset="utf-8">
  <title>ESPORTS</title>
  <link rel="stylesheet" href="invoice.css" media="all" />
  <script src="html2canvas.min.js"></script>
  <script src="pdfmake.min.js"></script>

</head>

<body>
  <div id="invoice" style="font-size: .8rem; padding: 1rem;">
    <header class="clearfix">
      <div id="logo">
        <h2>ESPORTS</h2>
      </div>
      <h1>INVOICE </h1>
      <div id="company" class="clearfix">
        <div>Issued by:</div>
        <div>Toxic_V</div>
        <div>Kristu Jayanti College<br /> Banglore</div>
        <div>(91) 9800-473-000</div>
        <div><a href="mailto:ankitapaintsandhardware@gmail.com">toxic_v.business@gmail.com</a></div>
      </div>

      <div id="project">
        <div><span><img src="../admin/assets/images/Logo and Text.png" alt="HTML5 Icon""></span></div>
        <div><span>EMAIL</span>18CS9801@kristujayanti.com</div>
        <div><span>Date and time : <?php
                                    $dt = new DateTime();
                                    echo $dt->format('d-m-Y ');
                                    ?></span></div>
        <div><span>Date and time : <?php
                                    $dt = new DateTime();
                                    echo $dt->format('H:i:s');
                                    ?></span></div>
        </div>

    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th>TEAM NAME</th>
            <th>TOURNAMENT</th>
            <th>REGISTRATION FEE</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $res = mysqli_query($con, "select * from `team_reg` where reg_fee= '$reg_fee' ");
          while ($row = mysqli_fetch_assoc($res)) {
          ?>
            <tr>
              <td class=" service"><?php echo $row['teamname'] ?></td>
            <td class="desc"><?php echo $row['tournament_name'] ?> </td>
            <td class="unit"> <?php echo $row['reg_fee'] ?></td>
            <td class="qty"></td>
            <td class="total"></td>
            </tr>
          <?php
          }
          ?>
          <tr>
            <td colspan="4" class="grand total"> TOTAL</td>
            <td class="grand total">₹<?php echo $reg_fee ?></td>
          </tr>
          </tbody>
          </table>
          <center>
            <button class="button button2"><a href="../Homepage/index.php">Home</button> </a>
            <input type="button" value="Download" class="btn" onclick="Export()">
          </center>
          <div id="notices">
            <div>NOTICE:</div>
            <div class="notice"> Invoice was created on a computer and is valid without the signature and seal</div>
            <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>

          </div>
          </main>
          <footer>
            Invoice was created on a computer and is valid without the signature and seal.<br>
            If you have any queries feel free to contact us at <a href="toxic_v.business@gmail.com"> toxic_v.business@gmail.com</a> </footer>
        </div>
        <script type="text/javascript">
          function Export() {
            html2canvas(document.getElementById('invoice'), {
              onrendered: function(canvas) {
                var data = canvas.toDataURL();
                var docDefinition = {
                  content: [{
                    image: data,
                    width: 500
                  }]
                };
                pdfMake.createPdf(docDefinition).download("Invoice.pdf");
                alert("Invoice Downloading Started");
              }
            });
          }
        </script>
        <style>
          .button {
            background-color: DodgerBlue;
            /* Green */
            border: none;
            color: white;
            padding: 12px 18spx;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s;
            /* Safari */
            transition-duration: 0.4s;
          }

          .button2:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
          }
        </style>
</body>

</html>