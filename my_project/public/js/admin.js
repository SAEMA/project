$.noConflict();
jQuery.noConflict();
"use strict";
$(document).ready(function () {
	var gwidth = $('window').width();
	var gheight = $('window').height();
	
    $("#list_records").jqGrid({
        
        url: "make_table",
        datatype: "json",
        multiselect: true,
        mtype: "GET",
        colNames: ["User Id","First Name", "Last Name",
                    "Middle Name",
                    "Date of Birth","Email",
                    "Employement","Employer","Gender",
                    "Marital-Status","Phone no"
                    ],
        colModel: [
            { name: "id",align:"right",width:'60%'},
            { name: "fname",width:'100%',editable:true},
            { name: "lname",width:'100%',editable:true},
            { name: "mname",width:'100%',editable:true},
            { name: "dob",width:'80%',editable:true},
            { name: "email",width:'200%',editable:true},
            { name: "employment",width:'100%',editable:true},
            { name: "employer",width:'100%',editable:true},
            { name: "options",width:'60%',editable:true},
            { name: "maritalstatus",width:'100%',editable:true},
            { name: "phonenumber",width:'100%',editable:true},
        ],
        pager: "#perpage",
        rowNum: 10,
        rowList: [10,20],
        sortname: "id",
        sortorder: "asc",
        height: gheight ,
       	width: '100%',
        search:true,
        viewrecords: true,
        gridview: true,
        align:'center',
        caption: "USER DETAILS!",
        subGrid: true, 
        subgridtype: 'json', // set the subgrid type to json
        subGridUrl: "make_subgrid",
        subGridModel:[{
                
                        name: ["id","street","city","state","fax"],
                        width: [100,100,100,100,100],
                        align: ["center","center","center","center","center"],
                        params: false
            }],
        gridComplete: function(){
        },
		editurl:'edit_table',//---------------------for deleting and editing
	});
		
    $('#list_records').navGrid('#perpage', { edit: true, add: false, del: true, search: true, refresh: true, view: true, position: "left", cloneToTop: true });    
});
