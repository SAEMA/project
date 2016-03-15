$(document).ready(function(){
		
		$("#role").change(function(e) {
    var selected = $(this).val();
    //console.log('change:', selected);
    if(selected === '--') 
     {  $("#id1").text("") ;
    $("#id2").text("") ;
     $("#id3").text("") ;
      $("#id4").text("") ;
       $("#id5").text("") ;
        $("#id11").text("") ;
    $("#id12").text("") ;
     $("#id13").text("") ;
      $("#id14").text("") ;
       $("#id15").text("") ;
   }
    else
    {
        $.ajax({
                method: 'POST',
                url: 'roles.php',
                dataType: 'json',
                data: {
                    selected: selected, 
                    
                },
                success: function(msg) {
                    
                    //window.location.replace("t.php");
                    var arr = new Array();
                    var arr1 = new Array();
                    var i = 0;
                    var leno = msg['operid'].length;
                   console.log(msg.operid);
                   var lenr = msg['resourcid'].length;
                   console.log(msg.resourcid);
                   $.each( msg, function( key, value ) {
                    console.log( key + ": " + value );
                     });

                   $("#id1").html( ' view :<input type="checkbox" name="optional" value="" >');
                        $("#id2").html( ' add :<input type="checkbox" name="optional" value="">');
                        $("#id3").html( ' delete :<input type="checkbox" name="optional" value="">');
                        $("#id4").html( ' update :<input type="checkbox" name="optional" value="">');
                       $("#id5").html( ' all :<input type="checkbox" name="optional" value="">');
 
                       $("#id11").html( ' view :<input type="checkbox" name="optional" value="" >');
                        $("#id12").html( ' add :<input type="checkbox" name="optional" value="">');
                        $("#id13").html( ' delete :<input type="checkbox" name="optional" value="">');
                        $("#id14").html( ' update :<input type="checkbox" name="optional" value="">');
                       $("#id15").html( ' all :<input type="checkbox" name="optional" value="">');
                        

                   arr = msg.operid;
                   arr1 = msg.resourcid;
                   //console.log(arr);
                   var len = arr.length;
                   var valu = new Array();
                   var len1 = arr1.length;
                   var vall = new Array();
                   var temp1 = len -1;
                   var temp2 = len1 -1;
                   len = len -1;
                   len1 = len1 -1;
                   while (len1 >= 0)
                   {
                        vall[len1] = arr1[len1];
                       
                        //console.log(vall[len1]);
                         len1 = len1 - 1;
                   }
                 // if(vall[len1] = 2)
                   while (len >= 0)
                   {
                        valu[len] = arr[len];
                       
                        //console.log(valu[len]);
                         len = len - 1;
                    }
                    var str = "";
                    while (temp1 >=0 && temp2 >=0)
                  {
                    str = vall[temp1] + valu[temp2];
                    console.log(str);
                    
                    if (vall[temp1] == 2)
                    {
                        temp = valu[temp2];
                        switch (temp)
                        {
                            case '1':  $("#id1").html( ' view : <input type="checkbox" name="optional" value="" checked>');
                            break;
                            case '2':  $("#id2").html( ' delete : <input type="checkbox" name="optional" value="" checked>');
                            break;
                            case '3':  $("#id3").html( ' update : <input type="checkbox" name="optional" value="" checked>');
                            break;
                            case '4':  $("#id4").html( ' delete : <input type="checkbox" name="optional" value="" checked>');
                            break;
                            case '5':  $("#id5").html( ' all : <input type="checkbox" name="optional" value="" checked>');
                            break;
                        }
                    }
                    else if (vall[temp1] == 1)
                    {
                        temp = valu[temp2];
                        switch (temp)
                        {
                            case '1':  $("#id11").html( ' view : <input type="checkbox" name="optional" value="" checked>');
                            break;
                            case '2':  $("#id12").html( ' delete : <input type="checkbox" name="optional" value="" checked>');
                            break;
                            case '3':  $("#id13").html( ' update : <input type="checkbox" name="optional" value="" checked>');
                            break;
                            case '4':  $("#id14").html( ' delete : <input type="checkbox" name="optional" value="" checked>');
                            break;
                            case '5':  $("#id15").html( ' all : <input type="checkbox" name="optional" value="" checked>');
                            break;
                        }
                    } 

                    temp1 = temp1 - 1;
                    temp2 = temp2 - 1;
                }
                    //if (vall[temp])
            //         var temp = valu[len];
            //         switch (temp)
            //         {
            //             case '1':  $("#id1").html( ' view :<input type="checkbox" name="optional" value="" checked>');
            //             break;
            //             case '2':  $("#id2").html( ' delete :<input type="checkbox" name="optional" value="" checked>');
            //             break;
            //             case '3':  $("#id3").html( ' update :<input type="checkbox" name="optional" value="" checked>');
            //             break;
            //             case '4':  $("#id4").html( ' delete :<input type="checkbox" name="optional" value="" checked>');
            //             break;
            //             case '5':  $("#id5").html( ' all :<input type="checkbox" name="optional" value="" checked>');
            //             break;
            //         }
            //         len = len - 1;
            // }
           
        
                   //    //console.log("yes");
                   //    arr [i] = value;
                   //    i++;
                   //    console.log(arr[i]);
                   
                   // var len = msg.length;
               // console.log(msg);
                   // $("#id1").text();
                    if (msg.resourcid = 1)
                    {
                        //if()
                        //$("#id").text(msg.operid);

                       // $("#id1").html( ' view :<input type="checkbox" name="optional" value="" checked>');
                       // $("#id2").html( ' add :<input type="checkbox" name="optional" value="">');
                       // $("#id3").html( ' delete :<input type="checkbox" name="optional" value="">');
                       // $("#id4").html( ' update :<input type="checkbox" name="optional" value="">');
                       //$("#id5").html( ' all :<input type="checkbox" name="optional" value="">');
                      //   page2.php :<input type="checkbox" name="vehicle" value="">' );


                    }
                    
                    // if (msg.idi == "success" ) 
                    // {
                    //    if(msg.admin == 5)
                    //    {
                    //     window.location.replace('admin.php');
                    //    }
                    //    else {  
                    //     window.location.replace('profile.php');
                    //     }
                    // }
                    // else if (msg.idi2 == "failure")
                    // {
                    //     $("#us3").html('<div class="saema"><H4>PLEASE ACTIVATE YOU ACCOUNT FIRST!</H4></div>');
                    // } 
                    // else 
                    // {  
                    //     $("#us3").html(msg.idi1);           
                    // }
                }
            });
        }



	});
});
