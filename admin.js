$.noConflict();
jQuery.noConflict();
"use strict";
$(document).ready(function () {
$("#list_records").jqGrid({
    url: "admindb.php",
    datatype: "json",
    mtype: "POST",
    colNames: ["User Id","First Name", "Last Name",
                "Middle Name",
                "Date of Birth","Email_id",
                "Employement","Employer","Gender",
                "Marital-Status","Phone no",
                ],
    colModel: [
        { name: "id",align:"right",width:'30%',editable:true},
        { name: "fname",width:'60%',editable:true},
        { name: "lname",width:'60%',editable:true},
        { name: "mname",width:'60%',editable:true},
        { name: "dob",width:'60%',editable:true},
        { name: "emailid",width:'200%',editable:true},
        { name: "employment",width:'60%',editable:true},
        { name: "employer",width:'60%',editable:true},
        { name: "options",width:'50%',editable:true},
        { name: "maritalstatus",width:'60%',editable:true},
        { name: "phonenumber",width:'100%',editable:true},
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
    },
		editurl:'editanddeleteadmin.php',
	});
		$('#list_records').navGrid('#perpage', { edit: true, add: false, del: true, search: true, refresh: true, view: false, position: "left", cloneToTop: true });    
});