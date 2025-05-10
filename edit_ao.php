<?php //include('config.php');
session_start();
include('dbconnection/connection.php');
$state = $_GET['state'];
if ($_SESSION['user']) {
    $name = $_SESSION['user'];
    //include('org1.php');
    include 'dbfiles/org.php';
    //include'dbfiles/iqry_acyear.php';
?>
    <!DOCTYPE html>
    <html lang="en">
    <style>
        .frmSearch {
            border: 1px solid #a8d4b1;
            background-color: #c6f7d0;
            margin: 2px 0px;
            padding: 40px;
            border-radius: 4px;
        }

        #country-list {
            float: left;
            list-style: none;
            margin-top: -3px;
            padding: 0;
            width: 190px;
            position: absolute;
        }

        #country-list li {
            padding: 10px;
            background: #f0f0f0;
            border-bottom: #bbb9b9 1px solid;
        }

        #country-list li:hover {
            background: #ece3d2;
            cursor: pointer;
        }
    </style>
    <?php include 'template/headerfile.php'; ?>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>

    <style>
        strong {
            color: red;
        }
    </style>
    <script>
        function s2(i) {
            var curval = document.getElementById("pname" + i).value;
            $.ajax({
                type: "GET",
                url: "getdescriptionauto.php",
                data: {
                    keyword: curval,
                    id: i
                },
                success: function(data) {
                    $("#suggesstion-box" + i).show();
                    $("#suggesstion-box" + i).html(data);
                    $("#pname" + i).css("background", "#FFF");
                }
            });
        }

        function selectCountry(val, i) {
            document.getElementById("pname" + i).value = val;
            $("#suggesstion-box" + i).hide();
        }
    </script>

    <script>
        function deleteRow() {
            var rr = document.getElementById("rows1").value

            if (rr != 0) {
                // var oRow = rr.parentNode.parentNode;
                document.getElementById("dynamic-table1").deleteRow(rr);
                var row = document.getElementById("rows1").value
                document.getElementById("rows").value = row - 1;
                total();
            } else {
                alert('Please Select Atleast One Row');
                return false;
            }
        }

        function ConfirmDialog() {
            var x = confirm("Are you sure to delete record?")
            if (x) {
                return true;
            } else {
                return false;
            }
        }
    </script>
    <script>
        function showHint22(str) {

            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }
            if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else { // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                    var show = xmlhttp.responseText;
                    var strar = show.split(":");
                    //document.getElementById("supname").value=strar[2];

                    //document.getElementById("state").value=strar[1];

                    //document.getElementById("city").value=strar[2];	
                    document.getElementById("store_name").value = strar[1];
                    document.getElementById("state").value = strar[2];
                    document.getElementById("state_code").value = strar[3];
                    //document.getElementById("addr").value=strar[4];	
                    document.getElementById("gst_in").value = strar[4];
                    document.getElementById("store_type").value = strar[5];

                    document.getElementById("supervisor").value = strar[6];
                    document.getElementById("cordinator").value = strar[7];
                    document.getElementById("afm").value = strar[8];
                    document.getElementById("company").value = strar[9];
                }
            }
            xmlhttp.open("GET", "get-apdata3.php?q=" + str, true);
            xmlhttp.send();
        }
    </script>

    <script>
        function showUser(str, id) {

            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }
            if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else { // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                    var show = xmlhttp.responseText;
                    var strar = show.split(":");
                    //document.getElementById("supname").value=strar[2];

                    //document.getElementById("state").value=strar[1];

                    //document.getElementById("city").value=strar[2];	
                    document.getElementById("serv_num" + id).value = strar[1];
                    document.getElementById("hsn" + id).value = strar[2];
                    document.getElementById("gst" + id).value = strar[3];
                    //document.getElementById("addr").value=strar[4];	
                    document.getElementById("uom" + id).value = strar[4];
                    document.getElementById("price" + id).value = strar[5];
                    document.getElementById("serv_amt" + id).value = strar[6];


                }
            }
            xmlhttp.open("GET", "get_items.php?q=" + str, true);
            xmlhttp.send();
        }
    </script>




    <script>
        $(document).on('keyup', '.txt1', function() {
            var id = $(this).attr('data-row');

            var qty = document.getElementById('qty' + id).value;
            var price = document.getElementById('price' + id).value;


            bal = parseFloat(qty) * parseFloat(price);
            document.getElementById('amnt' + id).value = bal;
            calculateTotal1();
            calculateTotal1k();
            calculateTotal1kk();
            calculateTotal1kv();

        });


        $(document).on('keyup', '.txt20', function() {
            var id = $(this).attr('data-row');

            var amt = document.getElementById('amnt' + id).value;
            var sgst = document.getElementById('sgst' + id).value;
            var serv_amt = document.getElementById('serv_amt' + id).value;


            bal = (parseFloat(amt) * parseFloat(sgst)) / 100;
            alert(sgst);
            ser = (parseFloat(amt) * parseFloat(serv_amt)) / 100;
            document.getElementById('sgstamt' + id).value = bal;
            document.getElementById('serv_amnt' + id).value = ser;
            calculateTotal2();

        });

        $(document).on('keyup', '.txt21', function() {
            var id = $(this).attr('data-row');

            var amt = document.getElementById('amnt' + id).value;
            var cgst = document.getElementById('sgst' + id).value;


            bal = (parseFloat(amt) * parseFloat(cgst)) / 100;
            document.getElementById('cgstamt' + id).value = bal;
            calculateTotal3();

        });


        function calculateTotal1() {
            subTotal = 0;
            total = 0;
            $('.txt').each(function() {

                if ($(this).val() != '') subTotal += parseFloat($(this).val());
            });
            $('#tot').val(subTotal.toFixed(2));
            //$('#bamount').val( subTotal.toFixed(2) );
        }


        function calculateTotal1kv() {
            subTotal = 0;
            total = 0;
            $('.txt7').each(function() {

                if ($(this).val() != '') subTotal += parseFloat($(this).val());
            });
            $('#tot_serv').val(subTotal.toFixed(2));
            //$('#bamount').val( subTotal.toFixed(2) );
        }

        function calculateTotal1k() {
            subTotal = 0;
            total = 0;
            $('.txt4').each(function() {

                if ($(this).val() != '') subTotal += parseFloat($(this).val());
            });
            $('#tot_gst').val(subTotal.toFixed(2));
            //$('#bamount').val( subTotal.toFixed(2) );
        }

        function calculateTotal1kk() {
            subTotal = 0;
            total = 0;
            $('.txt5').each(function() {

                if ($(this).val() != '') subTotal += parseFloat($(this).val());
            });
            $('#net').val(subTotal.toFixed(2));
            //$('#bamount').val( subTotal.toFixed(2) );
        }

        function calculateTotal2() {
            subTotal = 0;
            total = 0;
            $('.txt50').each(function() {

                if ($(this).val() != '') subTotal += parseFloat($(this).val());
            });
            $('#sgsttotal').val(subTotal.toFixed(2));
            //$('#bamount').val( subTotal.toFixed(2) );
        }

        function calculateTotal3() {
            subTotal = 0;
            total = 0;
            $('.txt51').each(function() {

                if ($(this).val() != '') subTotal += parseFloat($(this).val());
            });
            $('#cgsttotal').val(subTotal.toFixed(2));
            //$('#bamount').val( subTotal.toFixed(2) );
        }
    </script>

    <body class="no-skin">
        <?php include 'template/logo.php'; ?>

        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.loadState('main-container')
                } catch (e) {}
            </script>

            <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
                <script type="text/javascript">
                    try {
                        ace.settings.loadState('sidebar')
                    } catch (e) {}
                </script>

                <!-- /.sidebar-shortcuts -->
                <?php include 'template/sidemenu.php' ?>
                <!-- /.nav-list -->

                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>
            </div>


            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <i class="ace-icon fa fa-cog home-icon"></i>
                                <a href="qot_list"> Portfolio </a>
                            </li>
                            <li>
                                <a href=""> Appointment</a>
                            </li>

                            <!--<li class="active">Blank Page</li>-->
                        </ul><!-- /.breadcrumb -->

                        <!-- /.nav-search -->
                    </div>

                    <div class="page-content">
                        <!-- /.ace-settings-container -->
                        <div class="page-header">
                            <h1 align="center">
                                Appointment Order

                            </h1>
                        </div>

                        <?php $id = $_GET['id'];

                        //echo $id;

                        //include('config.php');

                        $res = mysqli_query($link, "select * from emps where empid='$id'") or die(mysqli_error());
                        $rw = mysqli_fetch_array($res) or die(mysqli_error());
                        ?>


                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="row">
                                    <div class="col-xs-12">

                                        <form name="frm" method="post" action="apoint_suc.php?state=<?php echo $state; ?>" enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                                            <input type="hidden" name="ses" value="<?php echo $name; ?>">
                                            <table class="table table-striped table-bordered table-hover">
                                                <tr>

                                                <tr>
                                                    <td align="right">Appointletter For</td>
                                                    <td align="left">

                                                        <!-- <select id="category" name="letter_for" class="form-control">

                                                            <option value="">Select</option>

                                                            <option value="tm" <?php if ($rw['appointmentcategory'] === "tm") {
                                                                                    echo "selected";
                                                                                } ?>>Technical Manager</option>
                                                            <option value="mis" <?php if ($rw['appointmentcategory'] === "mis") {
                                                                                    echo "selected";
                                                                                } ?>>MIS Executive</option>
                                                            <option value="sup" <?php if ($rw['appointmentcategory'] === "sup") {
                                                                                    echo "selected";
                                                                                } ?>>Supervisor</option>
                                                            <option value="tech" <?php if ($rw['appointmentcategory'] === "tech") {
                                                                                        echo "selected";
                                                                                    } ?>>Technician</option>
                                                        </select> -->
                                             <input type="text" value="<?php echo $rw['appointmentcategory'] ?>" class="form-control" name="letter_for" id="category"></td>
                                                    </td>
                                                    <td align="right">Designation</td>
                                                    <td align="left"><input type="text" value="<?php echo $rw['designation'] ?>" class="form-control" name="desig" id="desig"></td>
                                                </tr>

                                                <tr>
                                                    <td align="right">Date</td>
                                                    <td><input type="date" name="apdate" id="apdate" value="<?php echo date('Y-m-d', strtotime($rw["apt_date"])) ?>" class="form-control"></td>
                                                
                                                    <td align="right">Address</td>
                                                    <td align="left">
                                                        <textarea required name="address" id="address" class="form-control"><?php echo $rw['address'] ?></textarea>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td align="right">Name</td>
                                                    <td align="left"><input type="text" value="<?php echo $rw['emp_name'] ?>" class="form-control" name="name" id="name"></td>
                                                    <td align="right">Join Date</td>
                                                    <td><input type="date" name="join_date" id="join_date" value="<?php echo date('Y-m-d', strtotime($rw["DOJ"])) ?>" class="form-control"></td>
                                                

                                                  
                                                </tr>

                                                <tr>
                                                    <td align="right">State</td>
                                                    <td align="left">
                                                        <input type="text" value="<?php echo $rw['state'] ?>" readonly class="form-control" name="state" id="state">
                                                    </td>
                                                    <td align="right">Take Home Salary</td>
                                                    <td>
                                                        <input type="text" required name="sal_th" id="sal_th" value="<?php echo $rw['sal_th'] ?>" class="form-control">
                                                    </td>
                                                   </tr>


                                                <tr>
                                                    <td align="right">Location</td>
                                                    <td align="left">
                                                        <input type="text" value="<?php echo $rw['branch'] ?>" class="form-control" name="location" id="location">
                                                    </td>
                                                    <td align="right">Acknowledgement</td><td align="left">
										<input type="file" required name="file"class="form-control" accept=".pdf"value="<?php echo $rw['file'];?>"/></td>
                                                </tr>


                                              





                                            </table>




                                            <?php
                                            //$aa="select * from add_bill where id1='$id'";
                                            /*$aa="select a.item_desc,a.hsn,a.sac,b.qty,b.price,b.tax_amnt,b.gst_amnt,b.sgst,b.cgst,
										sum(b.tax_amnt) as tax,sum(b.gst_amnt) as gs
 from add_bill b,products a where b.service_no='$service_no' and b.item_code=a.item_code and a.category=b.temp_type";*/
                                            //$/t=mysqli_query($link,$aa) or die(mysqli_error($link));
                                            ?>

                                            <!-- div.table-responsive -->

                                            <!-- div.dataTables_borderWrap -->
                                            <div>


                                                <div class="form-group">
                                                    <div class="col-md-offset-4 col-md-8">


                                                        <button class="btn btn-info" type="submit" name="update" id="update">
                                                            <i class="ace-icon fa fa-save bigger-110"></i>
                                                            Save
                                                        </button>





                                                        &nbsp; &nbsp; &nbsp;
                                                        <a href="al_list.php?state=<?php echo $state;?>"><button class="btn btn-danger" type="button" name="button" id="Close">
                                                                <i class="ace-icon fa fa-close bigger-110"></i>
                                                                Close
                                                            </button></a>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
            <script src="assets/js/jquery-2.1.4.min.js"></script>
            <script type="text/javascript">
                
            </script>
            <!--<script>
$(document).ready(function(){
$(".txt1").each(function(){
$(this).keyup(function(){
calculateSum();
});
});
});
function calculateSum(){
var sum=0;
$(".txt").each(function(){
if(!isNaN(this.value)&&this.value.length!=0){
sum+=parseFloat(this.value);
}});
$("#tot").val(sum.toFixed(2));

}
</script> 

<script>
$(document).ready(function(){
$(".txt2").each(function(){
$(this).keyup(function(){
calculateSum1();
});
});
});
function calculateSum1(){
var sum=0;
$(".txt3").each(function(){
if(!isNaN(this.value)&&this.value.length!=0){
sum+=parseFloat(this.value);
}});
$("#tot1").val(sum.toFixed(2));

}
</script> 

<script>
$(document).ready(function(){
$(".txt4").each(function(){
$(this).keyup(function(){
calculateSumk();
});
});
});
function calculateSumk(){
var sum=0;
$(".txt4").each(function(){
if(!isNaN(this.value)&&this.value.length!=0){
sum+=parseFloat(this.value);
}});
$("#tot_gst").val(sum.toFixed(2));

}
</script> -->
            <script src="assets/js/jquery-2.1.4.min.js"></script>

            <!-- <![endif]-->

            <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
            <script type="text/javascript">
                if ('ontouchstart' in document.documentElement)
                    document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
            </script>
            <script src="assets/js/bootstrap.min.js"></script>

            <!-- page specific plugin scripts -->
            <script src="assets/js/jquery.dataTables.min.js"></script>
            <script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
            <script src="assets/js/dataTables.buttons.min.js"></script>
            <script src="assets/js/buttons.flash.min.js"></script>
            <script src="assets/js/buttons.html5.min.js"></script>
            <script src="assets/js/buttons.print.min.js"></script>
            <script src="assets/js/buttons.colVis.min.js"></script>
            <script src="assets/js/dataTables.select.min.js"></script>

            <!-- ace scripts -->
            <script src="assets/js/ace-elements.min.js"></script>
            <script src="assets/js/ace.min.js"></script>
            <script type="text/javascript">
                function val(str, id) {
                    cal = 0;
                    cal1 = 0;
                    cal12 = 0;
                    //alert(id);
                    var price = document.getElementById("price" + id).value;
                    var qty = document.getElementById("qty" + id).value;
                    var gst = document.getElementById("gst" + id).value;
                    var serv_amt = document.getElementById("serv_code" + id).value;
                    //var serv_amtk=document.getElementById("serv_amnt"+id).value;
                    //alert(serv_amtk);

                    //var cgst=document.getElementById("cgst"+id).value;
                    //var gst=Math.abs(sgst)+Math.abs(cgst);
                    cal = eval(price) * eval(qty);
                    //alert(cal);
                    //document.getElementById("amnt"+id).value+document.getElementById("serv_amtk"+id).value=Math.abs(cal);	
                    cal12 = eval(price) * eval(qty) * eval(serv_amt) / 100;
                    //alert(cal12);
                    calk = (cal) + (cal12);
                    //alert(calk);
                    cal1 = eval(calk) * eval(gst) / 100;






                    //document.getElementById("gst_amnt"+id).value=cal1;
                    //alert(cal12);
                    document.getElementById("serv_amnt" + id).value = Math.abs(cal12);
                    //document.getElementById("serv_amnt"+id).value=cal12;


                    document.getElementById("gst_amnt" + id).value = Math.abs(cal1);



                }

                function qval(str, id) {
                    cal = 0;
                    cal1 = 0;
                    cal12 = 0;
                    //alert(id);
                    var price = document.getElementById("price" + id).value;
                    var qty = document.getElementById("qty" + id).value;
                    var gst = document.getElementById("gst" + id).value;
                    var serv_amt = document.getElementById("serv_amt" + id).value;
                    //var serv_amtk=document.getElementById("serv_amnt"+id).value;
                    //alert(serv_amtk);

                    //var cgst=document.getElementById("cgst"+id).value;
                    //var gst=Math.abs(sgst)+Math.abs(cgst);
                    cal = eval(price) * eval(qty);
                    document.getElementById("amnt" + id).value = cal;

                    //alert(cal);
                    //document.getElementById("amnt"+id).value+document.getElementById("serv_amtk"+id).value=Math.abs(cal);	
                    cal12 = eval(price) * eval(qty) * eval(serv_amt) / 100;
                    //alert(cal12);
                    calk = (cal) + (cal12);
                    //alert(calk);
                    cal1 = eval(calk) * eval(gst) / 100;
                    //document.getElementById("gst_amnt"+id).value=cal1;
                    //alert(cal12);
                    document.getElementById("serv_amnt" + id).value = Math.abs(cal12);
                    //document.getElementById("serv_amnt"+id).value=cal12;


                    document.getElementById("gst_amnt" + id).value = Math.abs(cal1);

                    calculateTotal1();
                    calculateTotal1k();
                    calculateTotal1kk();
                    calculateTotal1kv();

                }
            </script>



    </body>

    </html>
<?php

} else {
    session_destroy();

    session_unset();

    header('Location:index.php?authentication failed');
}

?>