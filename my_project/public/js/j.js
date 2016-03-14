$(document).ready(function () {
        $("#list_records").jqGrid({
            url: "ser.php",
            datatype: "json",
            mtype: "POST",
            colNames: ["User Id","First Name", "Last Name",
                        "Middle Name",
                        "Date of Birth","Email_id",
                        "Employement","Employer","Gender",
                        "Marital-Status","Phone no"
                        ],
            colModel: [
                { name: "id",align:"right",width:30},
                { name: "fname",width:60},
                { name: "lname",width:60},
                { name: "mname",width:60},
                { name: "dob",width:60},
                { name: "emailid",width:200},
                { name: "employment",width:60},
                { name: "employer",width:60},
                { name: "options",width:50},
                { name: "maritalstatus",width:60},
                { name: "phonenumber",width:100},
               
            ],
            pager: "#perpage",
            rowNum: 10,
            rowList: [10,20],
            sortname: "id",
            sortorder: "asc",
            height: '100%',
            width: '100%',
            viewrecords: true,
            gridview: true,
            caption: "USER DETAILS!",
            gridComplete: function(){
                var ids = jQuery("#list_records").jqGrid('getDataIDs');
                for(var i=0;i<ids.length;i++){
                var cl = ids[i];
                be = "<input style='height:22px;width:40px;' type='button' value='Edit' onclick=\"jQuery('#list_records')";
                be += ".jqGrid('editRow','"+cl+"');\"  />"; 
                se = "<input style='height:22px;width:40px;' type='button' value='Save' onclick=\"jQuery('#list_records')";
                se += ".jqGrid('saveRow','"+cl+"');\"  />"; 
                ce = "<input style='height:22px;width:50px;' type='button' value='Cancel' onclick=\"jQuery('#list_records')";
                ce += ".jqGrid('restoreRow','"+cl+"');\" />"; 
                jQuery("#list_records").jqGrid('setRowData',ids[i],{act:be+se+ce});
                }   
            }
        });     
    });
