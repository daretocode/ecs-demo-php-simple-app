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
        .auto-style10 {
            text-align: right;
        }
        .auto-style11 {
            text-align: right;
            height: 23px;
        }
        .auto-style12 {
            width: 383px;
            height: 69px;
        }
        .auto-style13 {
            width: 81%;
        }
        .auto-style14 {
            font-size: xx-large;
            height: 40px;
        }
        .auto-style15 {
            font-size: large;
        }
        .auto-style16 {
            font-size: xx-large;
        }
        .auto-style17 {
            width: 217px;
        }
        .auto-style18 {
            width: 232px;
        }
        .auto-style19 {
            width: 99px;
        }
    </style>
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        
    <table class="auto-style13">
    <tr>
        <td colspan="3" class="auto-style15">Concierge Order Register</td>
    </tr>
    <tr>
        <td colspan="2" class="auto-style14"><strong>Select Items to Purchase</strong></td>
        <td class="auto-style16" rowspan="3">
            <img alt="" src="https://s3-us-west-2.amazonaws.com/daretozlatan/trello.png" /></td>
    </tr>
    <tr>
        <td class="auto-style1"><strong>Name</strong>: Jim Vandragt</td>
        <td><strong>Manager</strong>: John McLaughin</td>
    </tr>
    <tr>
        <td class="auto-style1"><strong>Department</strong>: US9506-ProductDev</td>
        <td><strong>Mail Stop:</strong> 0161</td>
    </tr>
</table>
<table class="auto-style13">
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

<table class="auto-style13">
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
        <td colspan="3">FedEx Shipping($)&nbsp;
            <input id="Text1" type="text" /></td>
        <td>&nbsp;</td>
        <td colspan="2">&nbsp;</td>
    </tr>
</table>

<table class="auto-style13">
    <tr>
        <td class="auto-style10"><strong>Amenities:</strong></td>
        <td>$ 0.00</td>
        <td><strong>Comments:</strong></td>
    </tr>
    <tr>
        <td class="auto-style10"><strong>Services (including FedEx):</strong></td>
        <td>$ 0.49</td>
        <td rowspan="3">
            <textarea id="TextArea1" class="auto-style12" name="S1"></textarea></td>
    </tr>
    <tr>
        <td class="auto-style11"><strong>Tax:</strong></td>
        <td class="auto-style4">$ 0.00</td>
    </tr>
    <tr>
        <td class="auto-style10"><strong>Total Cost:</strong></td>
        <td>$ 0.49</td>
    </tr>
</table>

<table class="auto-style13">
    <tr>
        <td>
            <input id="Submit1" class="auto-style17" type="submit" value="SUBMIT" /></td>
        <td>
            <input id="Button1" class="auto-style18" type="button" value="CANCEL" /></td>
        <td>
            <input id="Button2" class="auto-style19" type="button" value="Print" /></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
</table>

</html>
