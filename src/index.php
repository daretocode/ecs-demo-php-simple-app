<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simple .NET App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css">
        .auto-style1 {
            width: 269px;
        }
        #Select1 {
            width: 245px;
        }
        .auto-style2 {
            width: 303px;
        }
        .auto-style3 {
            width: 303px;
            height: 23px;
        }
        .auto-style4 {
            height: 23px;
        }
        #Select2 {
            width: 245px;
        }
        .auto-style5 {
            height: 23px;
            width: 256px;
        }
        .auto-style6 {
            width: 256px;
        }
        #Select3 {
            width: 245px;
        }
        .auto-style7 {
            width: 395px;
        }
        .auto-style8 {
            width: 307px;
        }
        .auto-style9 {
            width: 307px;
            height: 23px;
        }
    </style>
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        
        <table style="width:100%;">
        <tr>
            <td colspan="3"><strong>Select Items to Purchase</strong></td>
        </tr>
        <tr>
            <td class="auto-style1"><strong>Name</strong>: Jim Vandragt</td>
            <td><strong>Manager</strong>: John McLaughin</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td class="auto-style1"><strong>Department</strong>: US9506-ProductDev</td>
            <td><strong>Mail Stop:</strong> 0161</td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <table style="width:100%;">
        <tr>
            <td class="auto-style3"><b>Site:</b></td>
            <td class="auto-style5"><b>Tax Rate:</b></td>
            <td class="auto-style4"><strong>Created On:</strong></td>
        </tr>
        <tr>
            <td class="auto-style2">
                <select id="Select1" name="D1" title="Design Yard">
                    <option>Design Yard</option>
                </select></td>
            <td class="auto-style6">0.06</td>
            <td>11/21/2017 8:28:00 AM</td>
        </tr>
        <tr>
            <td class="auto-style2"><strong>Concierge:</strong></td>
            <td class="auto-style6">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td class="auto-style2">
                <select id="Select2" name="D2" title="Design Yard">
                    <option>Bumstead, Candi</option>
                </select></td>
            <td class="auto-style6">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>

    <table style="width:100%;">
        <tr>
            <td class="auto-style9"><strong>Item:</strong></td>
            <td class="auto-style4"><strong>Price:</strong></td>
            <td class="auto-style4"><strong>Qty:</strong></td>
            <td class="auto-style4"><strong>Total:</strong></td>
            <td class="auto-style4"><strong>Amenities:</strong></td>
            <td class="auto-style4"><strong>Services:</strong></td>
        </tr>
        <tr>
            <td class="auto-style8">
                <select id="Select3" name="D3" title="Design Yard" class="auto-style7">
                    <option>Stamps</option>
                </select></td>
            <td>$ 0.49</td>
            <td>
                <select id="Select4" name="D4">
                    <option>1</option>
                </select></td>
            <td>
                $ 0.49</td>
            <td>$ 0.00</td>
            <td>$ 0.49</td>
        </tr>
        <tr>
            <td colspan="3">&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="2">&nbsp;</td>
        </tr>
    </table>
    </body>

</html>
