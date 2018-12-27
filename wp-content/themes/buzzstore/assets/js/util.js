﻿$(document).ready(function () {    $("#wbae_userdata").validate({        onkeyup: false,        onfocusout: false,        wrapper: 'div',        rules: {            txt_fname: {                required: true            },            txt_city: {                required: true            },            txt_tel: {                required: true,                digits: true,            },            txt_add: {                required: true            },            txt_pcode: {                required: true,            },            txt_mail: {                required: true,                email: true            },            txt_bname: {                required: true            },            txt_an: {                required: true,                digits: true            },            txt_scode: {                required: true,                digits: true,                minlength: 6,                maxlength: 6            }        },        messages: {            txt_fname: {                required: "Full name is required field"            },            txt_city: {                required: "City is required field"            },            txt_tel: {                required: "Telephone is required field",                digits: "Telephone is not valid",            },            txt_add: {                required: "Address is required field"            },            txt_pcode: {                required: "Postcode is required field",            },            txt_mail: {                required: "Email is required field",                email: "Email is not valid"            },            txt_bname: {                required: "Bank name is required field"            },            txt_an: {                required: "Account Number is required field",                digits: "Account Number is not valid"            },            txt_scode: {                required: "Sort Code is required field",                digits: "Sort Code is not valid",                minlength: "Sort Code is not valid",                maxlength: "Sort Code is not valid"            }        },        submitHandler: function (form) {            $('.asksmartwizard').carousel('next');        }    });        $("#contact_form_help").validate({        onkeyup: false,        onfocusout: false,        wrapper: 'div',        rules: {            txt_fname: {                required: true            },            txt_lname: {                required: true            },            txt_phone: {                required: true,                digits: true            },            txt_mail: {                required: true,                email: true            },            txt_query: {                required: true            }        },        messages: {            txt_fname: {                required: "First name is required field"            },            txt_lname: {                required: "Last name is required field"            },            txt_phone: {                required: "Telephone is required field",                digits: "Telephone is not valid",            },            txt_mail: {                required: "Email is required field",                email: "Email is not valid"            },            txt_query: {                required: "Query is required field"            }        }        //},        //submitHandler: function (form) {        //    $('.asksmartwizard').carousel('next');        //}    });    $(document).on("click", '.ask-services:not(.actives) a.services-parent-title', function (event) {        $("div.ask-services.actives .ask-sv-items").slideToggle(300);        $("div.ask-services.actives").removeClass("actives");        $(this).next(".ask-sv-items").slideToggle(300);        $(this).parent(".ask-services").toggleClass("actives");        return false;    });    $(document).on("click", '.actives a.services-parent-title', function (event) {        $(this).next(".ask-sv-items").slideToggle(300);        $(this).parent(".ask-services").toggleClass("actives");        return false;    });    $(document).on("click", '.ask-sv-items label', function (event) {        $('input[disabled].btnExample').removeAttr('disabled');    });    $('.asknewssection').carousel({        interval: 5000    }).on('slide.bs.carousel', function (e) {        var nextH = $(e.relatedTarget).height();        $(this).find('.active.item').parent().stop().animate({            height: nextH        }, 500);    });    $('.asksmartwizard').carousel({        interval: false    }).on('slide.bs.carousel', function (e) {        var nextH = $(e.relatedTarget).height();        $(this).find('.active.item').parent().stop().animate({            height: nextH        }, 500, function () {            $("html, body").animate({}, 600, function () {                $(this).find('.active.item').parent().removeAttr("style");            });        });    });    $("#autocomplete").autocomplete({        source: function (request, response) {            $.post("/WSearch/", request, response);        }, appendTo: '#autosearch-container',        select: function (event, ui) {            window.location.href = ui.item.value;            $("#autocomplete").val(ui.item.label);            return false;        },        focus: function (event, ui) {            $("#autocomplete").val(ui.item.label);            return false;        },    }).keyup(function (event) {        event.stopPropagation();    }).keydown(function () {        event.stopPropagation();    });    $(document).ready(function () {        var b;        $('#autocomplete').keypress(function (c) {            if (c.keyCode == 13) {                var str = $('#autocomplete').val();                if (str.length > 2) {                    var res = str.replace(/ /g, "-")                    var res2 = res.replace(/\//g, "_")                    b = '/?s=';                    location.href = b + res2;                } else {                    alert("Type at least 3 character for search")                }                return false            }        });        // $('#autocomplete2').keypress(function (c) {        //     if (c.keyCode == 13) {        //         var str = $('#autocomplete2').val();        //         if (str.length > 3) {        //             var res = str.replace(/ /g, "-")        //             var res2 = res.replace(/\//g, "_")        //             b = '/Search/';        //             location.href = b + res2 + '/';        //         } else {        //             alert("Type at least 4 character for search")        //         }        //        //        //         return false        //     }        // });        $('#search_icon').click(function (c) {            var str = $('#autocomplete').val();            if (str.length > 2) {                var res = str.replace(/ /g, "-")                var res2 = res.replace(/\//g, "_")                b = '/?s=/';                location.href = b + res2;            } else {                alert("Type at least 3 character for search")            }            return false        });    });    $(document).on("click", '#step1_part_next', function (event) {        if ($("select#Categories_List option:selected").index() > 0) {            if ($("select#Products_List option:selected").index() > 0) {                if ($("select#Condition_list option:selected").index() > 0) {                    $('.asksmartwizard').carousel('next');                    return false;                } else {                    alert("please choose your product condition for next step");                    return false;                }            } else {                alert("please choose your product for next step");                return false;            }        } else {            alert("please choose your product category for next step");            return false;        }    });    $(document).on("click", '#step2_part_next', function (event) {        if ($("#txt_wyw").val().trim() == '') {            alert("please tell us what you want");            return false;        } else {            $('.asksmartwizard').carousel('next');            return false;        }    });    $("#Categories_List").change(function () {        var cat_id = $("#Categories_List").val();        $.ajax({            type: 'POST'            ,dataType: 'json'            ,url: ajaxurl            ,data: {                'action': 'get_products_by_cat',                'cat_id': cat_id            }            ,success: function(response) {                var ddlCustomers = $("[id*=Products_List]");                ddlCustomers.empty().append('<option selected="selected" value="0">Please select</option>');                $.each(response, function (index, value) {                    // console.log(value);                    ddlCustomers.append("<option value='"+value.ID+"'>"+value.post_title+"</option>");                });            }        });    });    $(document).on("click", '#step3_part_next', function (event) {        $(function () {            var cat_id = $("#Categories_List").val();            var product_id = $("#Products_List").val();            var condition = $("#Condition_list").val();            var txt_wyw = $("#txt_wyw").val();            var part_name = $("#txt_part_name").val();            var part_address = $("#txt_part_add").val();            var part_email = $("#txt_part_mail").val();            var part_tel = $("#txt_part_tel").val();            var part_info = $("#txt_part_info").val();            $.ajax({                type: "POST"                ,dataType: 'json'                ,url: woocommerce_params.ajax_url                ,data: {                    'action': 'part_exchange',                    'cat_id': cat_id,                    'product_id': product_id,                    'condition': condition,                    'txt_wyw': txt_wyw,                    'part_name': part_name,                    'part_address': part_address,                    'part_email': part_email,                    'part_tel': part_tel,                    'part_info': part_info,                }                ,                beforeSend: function () {                    $("#step3_part_next").attr("disabled", "disabled");                    $("#info_user_part").animate({opacity: 0.25});                },                error: function () {                    $("#info_user_part").animate({opacity: 1});                    $("#step3_part_next").removeAttr('disabled');                    alert("Oops look like something broke, please try later.");                    return false;                },                success: function (r) {                    console.log(r);                    $('.asksmartwizard').carousel('next');                    return false;                }            });        });    });});