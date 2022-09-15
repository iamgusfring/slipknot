$(document).ready(function () {
    $(".content-wrapper").css("min-height", "524px");
    url = location.pathname.substring(location.pathname.lastIndexOf("index.html") + 1);

//    url = location.pathname.substring(location.pathname.lastIndexOf("/") + 1) + window.location.search;
//    //alert(url);
//    var url_li = url.split(".php");
//
//    if (url.indexOf('gender=MALE') > -1) {
//        parent_li = $("#" + url_li[0] + "_boys").closest('.treeview').attr('id');
//        if (parent_li != "")
//        {
//            $("#" + parent_li).addClass("active");
//        }
//        $("#" + url_li[0] + "_boys").addClass("active");
//
//    }
//    if (url.indexOf('gender=FEMALE') > -1) {
//        parent_li = $("#" + url_li[0] + "_girls").closest('.treeview').attr('id');
//        if (parent_li != "")
//        {
//            $("#" + parent_li).addClass("active");
//        }
//        $("#" + url_li[0] + "_girls").addClass("active");
//
//    }
//    if (url.indexOf('report_') > -1)
//        {
//           $("#reports").addClass("active");
//        }
//    else {
//
//            parent_li = $("#" + url_li[0]).closest('.treeview').attr('id');
//            if (parent_li != "")
//            {
//                $("#" + parent_li).addClass("active");
//            }
//            $("#" + url_li[0]).addClass("active");
//
//    }


    /*switch (url) {
     case 'dashboard.php':
     $("#dashboard").addClass("active");
     break;
     
     
     
     case 'add_candidate.php':
     $("#admissions").addClass("active");
     $("#add_candidate").addClass("active");
     break;
     
     case 'stu_profile_mini.php':
     $("#admissions").addClass("active");
     $("#stu_profile_mini").addClass("active");
     break;
     
     
     case 'fee_structure.php':
     $("#fee").addClass("active");
     $("#fee_payment").addClass("active");
     break;
     
     case 'fee_summary.php':
     $("#fee").addClass("active");
     $("#fee_payment").addClass("active");
     break;
     
     case 'hostel_fee_payment.php':
     $("#fee").addClass("active");
     $("#fee_payment").addClass("active");
     break;
     
     case 'dupli_print_receipt.php':
     $("#fee").addClass("active");
     $("#dupli_print_receipt").addClass("active");
     break;
     
     case 'fee_payment.php':
     $("#fee").addClass("active");
     $("#fee_payment").addClass("active");
     break;
     
     case 'refund_security.php':
     $("#fee").addClass("active");
     $("#refund_security").addClass("active");
     break;
     
     case 'stu_update.php':
     $("#student").addClass("active");
     $("#stu_update").addClass("active");
     break;
     
     case 'stu_promote_demote_individual.php':
     $("#student").addClass("active");
     $("#stu_promote_demote_individual").addClass("active");
     break;
     
     case 'stu_promote_demote_mass.php':
     $("#student").addClass("active");
     $("#stu_promote_demote_mass").addClass("active");
     break;
     
     case 'stu_drop.php':
     $("#student").addClass("active");
     $("#stu_drop").addClass("active");
     break;
     
     case 'stu_no_due.php':
     $("#student").addClass("active");
     $("#stu_no_due").addClass("active");
     break;
     
     case 'candidate_search.php':
     $("#admissions").addClass("active");
     $("#candidate_search").addClass("active");
     break;
     
     case 'stu_profile.php':
     $("#student").addClass("active");
     $("#stu_update").addClass("active");
     break;
     
     case 'student_aid.php':
     $("#student").addClass("active");
     $("#student_aid").addClass("active");
     break;
     
     case 'subject_change.php':
     $("#student").addClass("active");
     $("#subject_change").addClass("active");
     break;
     
     case 'add_visitor.php':
     $("#add_visitor").addClass("active");
     break;
     
     case 'create_account.php':
     $("#accounts").addClass("active");
     $("#create_account").addClass("active");
     break;
     
     case 'create_group.php':
     $("#accounts").addClass("active");
     $("#create_group").addClass("active");
     break;
     
     case 'create_company.php':
     $("#accounts").addClass("active");
     $("#create_company").addClass("active");
     break;
     
     case 'voucher_payment.php':
     $("#voucher").addClass("active");
     $("#voucher_payment").addClass("active");
     break;
     
     case 'voucher_receipt.php':
     $("#voucher").addClass("active");
     $("#voucher_receipt").addClass("active");
     break;
     
     case 'voucher_contra.php':
     $("#voucher").addClass("active");
     $("#voucher_contra").addClass("active");
     break;
     
     case 'voucher_journal.php':
     $("#voucher").addClass("active");
     $("#voucher_journal").addClass("active");
     break;
     
     case 'voucher_edit.php':
     $("#voucher").addClass("active");
     $("#voucher_edit").addClass("active");
     break;
     
     case 'voucher_delete.php':
     $("#voucher").addClass("active");
     $("#voucher_delete").addClass("active");
     break;
     
     case 'item_add.php':
     $("#inventory").addClass("active");
     $("#item_add").addClass("active");
     break;
     
     case 'item_issue.php':
     $("#inventory").addClass("active");
     $("#item_issue").addClass("active");
     break;
     
     case 'item_update.php':
     $("#inventory").addClass("active");
     $("#item_update_trans_master").addClass("active");
     break;
     
     case 'item_master_update.php':
     $("#inventory").addClass("active");
     $("#item_update_item_master").addClass("active");
     break;
     case 'create_user.php':
     $("#user").addClass("active");
     $("#item_update_item_master").addClass("active");
     break;
     case 'reports.php':
     $("#reports").addClass("active");
     break;
     
     case 'report_userwise_collection.php':
     $("#reports").addClass("active");
     break;
     
     case 'report_userwise_collection_summary.php':
     $("#reports").addClass("active");
     break;
     
     case 'report_mess_security_register.php':
     $("#reports").addClass("active");
     break;
     
     case 'report_subheadwise_summary.php':
     $("#reports").addClass("active");
     break;
     
     case 'advance_search.php':
     $("#advance_search").addClass("active");
     break;
     
     case 'stu_profile_display.php':
     $("#advance_search").addClass("active");
     $("#profile_stu").addClass("active");
     break;
     
     case 'prog_switch.php':
     $("#authentications").addClass("active");
     $("#prog_switch").addClass("active");
     break;
     
     case 'user_authentication.php':
     $("#authentications").addClass("active");
     $("#user_authentication").addClass("active");
     break;
     
     case 'fee_refund.php':
     $("#refund").addClass("active");
     $("#fee_refund").addClass("active");
     break;
     
     case 'fee_summary_refund.php':
     $("#refund").addClass("active");
     $("#fee_refund").addClass("active");
     break;
     
     case 'mess_security.php':
     $("#fee").addClass("active");
     $("#mess_security").addClass("active");
     break;
     
     case 'hostel_room_allotment.php':
     $("#hostel").addClass("active");
     //$("#hostel_room_allotment_boys").addClass("active");
     break;
     
     case 'hostel_mark_attendance.php':
     $("#hostel").addClass("active");
     $("#hostel_attendance").addClass("active");
     break;
     
     case 'hostel_attendance.php':
     $("#hostel").addClass("active");
     $("#hostel_attendance").addClass("active");
     break;
     
     case 'hostel_checkinout.php':
     $("#hostel").addClass("active");
     $("#hostel_checkinout").addClass("active");
     break;
     
     case 'leave_hostel.php':
     $("#hostel").addClass("active");
     
     break;
     
     case 'refund_approval.php':
     $("#approvals").addClass("active");
     $("#refund_approval").addClass("active");
     break;
     
     case 'fee_relaxation.php':
     $("#approvals").addClass("active");
     $("#fee_relaxation").addClass("active");
     break;
     
     case 'fee_relaxation_transport.php':
     $("#approvals").addClass("active");
     $("#fee_relaxation_transport").addClass("active");
     break;
     
     case 'approve_hostel_leaving.php':
     $("#approvals").addClass("active");
     //$("#approve_hostel_leaving").addClass("active");
     break;
     
     case 'fee_waiver_academic.php':
     $("#approvals").addClass("active");
     $("#fee_waiver_academic").addClass("active");
     break;
     
     case 'fee_waiver_hostel.php':
     $("#approvals").addClass("active");
     $("#fee_waiver_hostel").addClass("active");
     break;
     
     case 'tt_create_section.php':
     $("#timetable").addClass("active");
     $("#tt_create_section").addClass("active");
     break;
     
     case 'tt_assign_section.php':
     $("#timetable").addClass("active");
     $("#tt_assign_section").addClass("active");
     break;
     
     case 'tt_assign_group.php':
     $("#timetable").addClass("active");
     $("#tt_assign_group").addClass("active");
     break;
     
     case 'report_userwise_receipts.php':
     $("#reports").addClass("active");
     break;
     
     case 'report_datewise_admission.php':
     $("#reports").addClass("active");
     break;
     
     case 'cancel_receipt.php':
     $("#approvals").addClass("active");
     $("#cancel_receipt").addClass("active");
     break;
     
     case 'tt_apply_leave_stu.php':
     $("#tt_leave_stu").addClass("active");
     $("#tt_apply_leave_stu").addClass("active");
     break;
     
     case 'employee_add.php':
     $("#hr").addClass("active");
     $("#add_employee").addClass("active");
     break;
     
     case 'employee_update.php':
     $("#hr").addClass("active");
     $("#update_employee").addClass("active");
     break;
     
     case 'employee_update.php':
     $("#hr").addClass("active");
     $("#employee_update").addClass("active");
     break;
     
     case 'stu_mark_attendance.php':
     $("#stu_attendance").addClass("active");
     $("#stu_mark_attendance").addClass("active");
     break;
     }*/

    //Date picker
    $('.datepicker').datepicker({
        autoclose: true

    });

    $(".datepicker").datepicker().datepicker("setDate", new Date());

    $(".datepicker_ph").datepicker({
        defaultDate: null
    });


    $(".input_phone").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
                // Allow: Ctrl+A
                        (e.keyCode == 65 && e.ctrlKey === true) ||
                        // Allow: home, end, left, right
                                (e.keyCode >= 35 && e.keyCode <= 39)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });




    $(".slimScrollDiv").css({"height": "auto"});
    $(".menu").css({"height": "auto"});

    /* Accounts Select with disable feature */
    $('.accSelect').on('change', function () {
        $('option').prop('disabled', false);
        $('.accSelect').each(function () {
            var val = this.value;
            $('.accSelect').not(this).find('option').filter(function () {
                return this.value === val;
            }).prop('disabled', true);
        });
    }).change();

    //shortcut keys to open pages
    /*var addEvent = document.addEventListener ? function (target, type, action) {
     if (target) {
     target.addEventListener(type, action, false);
     }
     } : function (target, type, action) {
     if (target) {
     target.attachEvent('on' + type, action, false);
     }
     }
     
     addEvent(document, 'keydown', function (e) {
     e = e || window.event;
     var key = e.which || e.keyCode;
     
     /* for combination of multiple keys
     if (key === 90 && e.ctrlKey) {
     window.location.href = 'voucher_contra.php';
     }
     */
    /*if (key === 115) {
     window.location.href = 'voucher_contra.php';
     }
     
     if (key === 116) {
     window.location.href = 'voucher_payment.php';
     }
     
     if (key === 117) {
     window.location.href = 'voucher_receipt.php';
     }
     
     if (key === 118) {
     window.location.href = 'voucher_journal.php';
     }
     });
     */
    //Stop scrolling on input type number
    $(':input[type=number]').on('mousewheel', function (e) {
        $(this).blur();
    });

    /* Change user image script */
    $(".dp_div2,.stuImg_innerDiv,.emp_upload_img,.upld_photograph,.upld_signature").click(function () {
        //alert(this.id);
        $('#upload-image').croppie('destroy');
        document.getElementById("chkImg").value = this.id;
        if (document.getElementById("chkImg").value === 'upld_signature') {
            $image_crop = "";
            //alert(document.getElementById("chkImg").value);
            $image_crop = $('#upload-image').croppie({
                enableExif: true,
                viewport: {
                    width: 200,
                    height: 80,
                    type: 'square'
                },
                boundary: {
                    width: 300,
                    height: 300
                }
            });
            
        }else{
            //alert();
            $image_crop = "";
             $image_crop = $('#upload-image').croppie({
                enableExif: true,
                viewport: {
                    width: 200,
                    height: 200,
                    type: 'square'
                },
                boundary: {
                    width: 300,
                    height: 300
                }
            });
            //alert(this.id);
        }
        $('#img_modal').modal('show');
        //alert(this.id);
        if (document.getElementById("chkImg").value == "upld_signature")
            {
                $(".remove_image").hide();
            }else{
                $(".remove_image").show();
            }
       

    });

    $('.cropped_image').on('click', function (ev) {
        //alert();
        imgInput_value = document.getElementById("images").value;
        //alert(imgInput_value);
        if (imgInput_value != "")
        {
            if (document.getElementById("chkImg").value == "EMPIMG")
            {
                var user = "user";
                var user_id = document.getElementById("user_id").value;

            }
            if (document.getElementById("chkImg").value == "STUIMG")
            {
                var user = "stu";
                var user_id = document.getElementById("stu_id").value;

            }
            if (document.getElementById("chkImg").value == "emp_img")
            {
                var user = "emp";
                var user_id = document.getElementById("emp_id").value;

            }
            if (document.getElementById("chkImg").value == "alumni_img")
            {
                var user = "alumni";
                var user_id = document.getElementById("alumni_id").value;

            }
            if (document.getElementById("chkImg").value == "upld_photograph")
            {
                var user = "prpts";
                var user_id = document.getElementById("prpts_id").value;

            }
            if (document.getElementById("chkImg").value == "upld_signature")
            {
                var user = "sign";
                var user_id = document.getElementById("hd_stu_id").value;
                
            }


            $image_crop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (response) {
                $.ajax({
                    url: "/upload.php",
                    type: "POST",
                    data: {"upload_img": true, "image": response, "user": user, "user_id": user_id},
                    success: function (data) {
                        //alert(data);
                        var data = $.parseJSON(data);
//                        if (data.user_img === "user.jpg")
//                        {
//                            //alert(data.user_img);
//                            window.location.href = "/index.php?err=true";
//                        } else {
//                            location.reload();
//                        }
                        //alert(data.user_img);

                        alert("Cropped image uploaded successfully!");
                        if (data.user_img === "signImg")
                        {
                            $("#form_exmn").submit();
                        }else{
                            location.reload();
                        }
                        

                    }
                });
            });
        } else {
            alert("No image selected!");
        }

    });

    $(".remove_image").click(function () {

        if (document.getElementById("chkImg").value == "EMPIMG")
        {
            var user = "user";
            var user_id = document.getElementById("user_id").value;

        }
        if (document.getElementById("chkImg").value == "STUIMG")
        {
            var user = "stu";
            var user_id = document.getElementById("stu_id").value;

        }

        if (document.getElementById("chkImg").value == "emp_img")
        {
            var user = "emp";
            var user_id = document.getElementById("emp_id").value;

        }
        if (document.getElementById("chkImg").value == "alumni_img")
        {
            var user = "alumni";
            var user_id = document.getElementById("alumni_id").value;

        }

        $.ajax({
            url: "/upload.php",
            type: "GET",
            data: {remove_img: true, user: user, user_id: user_id},
            success: function (data) {
                var data = $.parseJSON(data);
//                if (data.user_img === "user.jpg")
//                {
//                    window.location.href = "/index.php?err=true";
//                } else {
//                    location.reload();
//                }
                location.reload();
                alert("Image removed successfully!");
                //location.reload();
            }
        });
    });

    $(window).scroll(function () {

        if ($(this).scrollTop() > 0) {


            $(".main-sidebar, .left-side").css("position", "fixed");
        }

    });


    $("form").keypress(function (e) {
        if (url == "fee_structure.php" || url == "fee_summary.php" || url == "add_candidate.php" || url == "stu_profile_mini.php" || url == "employee_search.html")
        {
            var key = e.charCode || e.keyCode || 0;
            if (key == 13) {
                alert("Do not Press Enter!");
                e.preventDefault();
            }
        }
    });


    first_child_li = "#" + $(".tab_link:first").closest('li').attr('id');
    first_parent_li = "#" + $(first_child_li).closest('.treeview').attr('id');
    $(first_child_li).addClass("active");
    $(first_parent_li).addClass("active");
    $('.tab_link').on('click', function () {
        //alert();
        child_li = "#" + $(this).closest('li').attr('id');
        parent_li = "#" + $(child_li).closest('.treeview').attr('id');
        if (child_li != first_child_li || child_li != first_parent_li)
        {
            sessionStorage.setItem("child_li", child_li);

            sessionStorage.setItem("parent_li", parent_li);

        } else {
            sessionStorage.setItem("child_li", first_child_li);

            sessionStorage.setItem("parent_li", first_parent_li);
        }

    });
    if (sessionStorage.getItem("parent_li") !== null) {
        $(first_child_li).removeClass("active");
        $(first_parent_li).removeClass("active");
        //alert();
    }

    child_li = sessionStorage.getItem("child_li");
    parent_li = sessionStorage.getItem("parent_li");
    $(parent_li).addClass("active");
    $(child_li).addClass("active");

//alert(child_li);
//alert(parent_li);
});
