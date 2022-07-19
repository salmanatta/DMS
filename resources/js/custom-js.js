$(document).ready(function (){
    // cardiac-history-fill fields
    // -------- Start ------------
    $("#a-fib").attr("disabled", true)
    $("#vent-arrhy").attr("disabled", true)
    $("#avblock").attr("disabled", true)
    $("#bbb").attr("disabled", true)

    /* historyofArrythima Check*/
    $("#historyofArrythima").change(function () {
        if ($(this).is(":checked")) {
            $("#a-fib").attr("disabled", false);
            $("#vent-arrhy").attr("disabled", false);
            $("#avblock").attr("disabled", false);
            $("#bbb").attr("disabled", false);
        } else {
            $("#a-fib").attr("disabled", true);
            $("#vent-arrhy").attr("disabled", true);
            $("#avblock").attr("disabled", true);
            $("#bbb").attr("disabled", true);
        }
    });
    //  for cass areas
    $(".cass").attr("disabled", true);
    $("#cassCheck").change(function () {
        if ($(this).is(":checked")) {
            $(".cass").attr("disabled", false);
        } else {
            $(".cass").attr("disabled", true);
        }
    });
    //  ecbo checks
    $(".cass").attr("disabled", true);
    $("#cassCheck").change(function () {
        if ($(this).is(":checked")) {
            $(".cass").attr("disabled", false);
        } else {
            $(".cass").attr("disabled", true);
        }
    });

    $(".arotic-data").attr("disabled", true);
    $(".arotic").change(function () {
        if ($(this).is(":checked")) {
            $(".arotic-data").attr("disabled", false);
        } else {
            $(".arotic-data").attr("disabled", true);
        }
    });

    $(".mitral-data").attr("disabled", true);
    $(".mitral").change(function () {
        if ($(this).is(":checked")) {
            $(".mitral-data").attr("disabled", false);
        } else {
            $(".mitral-data").attr("disabled", true);
        }
    });

    $(".tricupsid-data").attr("disabled", true);
    $(".tricupsid").change(function () {
        if ($(this).is(":checked")) {
            $(".tricupsid-data").attr("disabled", false);
        } else {
            $(".tricupsid-data").attr("disabled", true);
        }
    });

    $(".pulmonary-data").attr("disabled", true);
    $(".pulmonary").change(function () {
        if ($(this).is(":checked")) {
            $(".pulmonary-data").attr("disabled", false);
        } else {
            $(".pulmonary-data").attr("disabled", true);
        }
    });
    $("#Invasive-Int-1").attr("disabled", true)
    $("#Invasive-Int-2").attr("disabled", true)
    $("#Invasive-Int-3").attr("disabled", true)
    $("#DOL-Inv-Int").attr("disabled", true)

    $("#Previous-Heart-Surgery-1").attr("disabled", true)
    $("#Previous-Heart-Surgery-2").attr("disabled", true)
    $("#Previous-Heart-Surgery-3").attr("disabled", true)
    $("#DOL-Surg-Int").attr("disabled", true)
    $("#Prev-CV-Intervention").change(function (){
        if ($(this).is(":checked")) {
            $("#Invasive-Int-1").attr("disabled", false)
            $("#Invasive-Int-2").attr("disabled", false)
            $("#Invasive-Int-3").attr("disabled", false)
            $("#DOL-Inv-Int").attr("disabled", false)

            $("#Previous-Heart-Surgery-1").attr("disabled", false)
            $("#Previous-Heart-Surgery-2").attr("disabled", false)
            $("#Previous-Heart-Surgery-3").attr("disabled", false)
            $("#DOL-Surg-Int").attr("disabled", false)
        } else {
            $("#Invasive-Int-1").attr("disabled", true)
            $("#Invasive-Int-2").attr("disabled", true)
            $("#Invasive-Int-3").attr("disabled", true)
            $("#DOL-Inv-Int").attr("disabled", true)

            $("#Previous-Heart-Surgery-1").attr("disabled", true)
            $("#Previous-Heart-Surgery-2").attr("disabled", true)
            $("#Previous-Heart-Surgery-3").attr("disabled", true)
            $("#DOL-Surg-Int").attr("disabled", true)

        }
    });
    // --------- End ----------------
    // medical-history-fill fields
    // GI-history
    // -------- Start ------------
    $("#GI-history-gastric").attr("disabled", true)
    $("#GI-history-gastric-previous-surgery").attr("disabled", true)
    $("#GI-history-gastric-other").attr("disabled", true)
    $("#GI-history").change(function (){
        if ($(this).is(":checked")) {
            $("#GI-history-gastric").attr("disabled", false)
            $("#GI-history-gastric-previous-surgery").attr("disabled", false)
            $("#GI-history-gastric-other").attr("disabled", false)
        } else {
            $("#GI-history-gastric").attr("disabled", true)
            $("#GI-history-gastric-previous-surgery").attr("disabled", true)
            $("#GI-history-gastric-other").attr("disabled", true)

        }
    });
    //RESP-history
    $("#RESP-history-lung-disease").attr("disabled", true)
    $("#RESP-history-asthma").attr("disabled", true)
    $("#RESP-history-COAD").attr("disabled", true)
    $("#RESP-history-emphysema").attr("disabled", true)
    $("#RESP-history").change(function (){
        if ($(this).is(":checked")) {
            $("#RESP-history-lung-disease").attr("disabled", false)
            $("#RESP-history-asthma").attr("disabled", false)
            $("#RESP-history-COAD").attr("disabled", false)
            $("#RESP-history-emphysema").attr("disabled", false)
        } else {
            $("#RESP-history-lung-disease").attr("disabled", true)
            $("#RESP-history-asthma").attr("disabled", true)
            $("#RESP-history-COAD").attr("disabled", true)
            $("#RESP-history-emphysema").attr("disabled", true)

        }
    });
    function getDocumentData(id){
        // console.log(id);
        // $('tbody').empty();
        $('tbody').html("");
        $.ajax({
            type: "GET",
            url: "getDocumentView/"+id,            
            dataType: "json",
            success: function(response){                
                var obj = response.documents;
                for(var i = 0 ; i < obj.length ; i++)
                {
                    $('tbody').append('<tr>\
                    <td>'+obj[i].name+'</td>\
                    <td>'+obj[i].version+'</td>\
                    <td>'+obj[i].chapter+'</td>\
                    <td>'+obj[i].standard+'</td>\
                    <td><a target="_blank" href="'+obj[i].file_path+'">Document</a></td>\
                    <td>'+obj[i].keywords+'</td>\
                    </tr>');
                }                
            }
        })        

    }
    $(document).ready(function () {
        $('#myDataTable').DataTable();
        console.log('whats up');
        $('#myDataTable2').DataTable();

        function validateFileType(){
            var fileElement = document.getElementById("filename");
            var fileExtension = "";
            if (fileElement.value.lastIndexOf(".") > 0) {
                fileExtension = fileElement.value.substring(fileElement.value.lastIndexOf(".") + 1, fileElement.value.length);
            }
            // if (fileExtension.toLowerCase() == "gif" || fileExtension.toLowerCase() == "png") {
            //     return true;
            // }
            // else {
            //     document.getElementById("filename").value =null;
            //     alert("You must select image file only");
            //     return false;
            // }
        }
        $("body").on("click" , '.showDoc' , function(){
            getDocumentData($(this).attr('data-tree'));
            console.log($(this));
            $(this).addClass="blodHeading";

            // jstree-wholerow jstree-wholerow-clicked
            // console.log($(this).attr('data-tree'));
        });
        
    });

});
