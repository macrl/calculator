var str="";
var strPhp="";
var nbVirguleInOPerande=0;
var displayRes=false;
            $(".btn").on("click",function(){
                $(this).fadeOut(100);
                $(this).fadeIn(500);
                var valBtn=$(this).attr("value");

                if(str=="0"&&valBtn==0||str==""&&valBtn=="="||str==""&&valBtn=="*"||str==""&&valBtn=="/"||str==""&&valBtn=="+"||str==""&&valBtn=="ac"){
                    return false;
                }

                if(str=="-"&&valBtn=="="||str=="-"&&valBtn=="*"||str=="-"&&valBtn=="/"||str=="-"&&valBtn=="+"){
                    str="";
                    strPhp="";
                    nbVirguleInOPerande=0;
                    $("#operation").text(str);
                    $("#res").attr("value",str);

                    return false;
                }

                if(valBtn=='.'){
                    nbVirguleInOPerande++;
                    if(nbVirguleInOPerande>1){
                        return false;
                    }
                }
                


                if(str==".")
                {
                    str="0.";
                }

                str+=valBtn; 
                str=str.replace("*+","+");
                str=str.replace("-*","*");
                str=str.replace("+*","*");
                str=str.replace("/*","*");
                str=str.replace("*/","/");
                str=str.replace("+/","/");
                str=str.replace("-/","/");
                str=str.replace("/+","+");
                str=str.replace("++","+");
                str=str.replace("--","-");
                str=str.replace("//","/");
                str=str.replace("**","*");
                str=str.replace("+-","-");
                str=str.replace("-+","+");
                if(parseFloat(str)==0){
                    str=str.replace("00","0");
                }
                

                $("#res").attr("value",str);  
                    if(valBtn!="+"&&valBtn!="-"&&valBtn!="*"&&valBtn!="/"&&valBtn!="="){
                        if(valBtn=="ac"){
                            str="";
                            strPhp="";
                            nbVirguleInOPerande=0;
                            $("#operation").text(str);
                            $("#res").attr("value",0);
                        }
                        else{
                            if(displayRes){
                                if(valBtn==0){
                                    str="";
                                    strPhp="";
                                    $("#res").attr("value",0);
                                }
                                else{
                                    str=valBtn;
                                    strPhp=valBtn;
                                    $("#res").attr("value",str);
                                }
                                
                                nbVirguleInOPerande=0;
                                    
                                displayRes=false;

                                $("#operation").text("");
                                
                            }
                            else{
                                strPhp+=valBtn;
                            } 
                        }
                    }
                    else{
                        nbVirguleInOPerande=0;
                        displayRes=false;
                        if(valBtn!="="){
                            strPhp+="#"+valBtn+"#";
                            strPhp=strPhp.replace("*##+","+"); 

                            strPhp=strPhp.replace("-##*","*");
                            strPhp=strPhp.replace("+##*","*");
                            strPhp=strPhp.replace("/##*","*");
                            strPhp=strPhp.replace("*##/","/");
                            strPhp=strPhp.replace("+##/","/");
                            strPhp=strPhp.replace("-##/","/");
                            strPhp=strPhp.replace("/##+","+");
                            strPhp=strPhp.replace("+##+","+");
                            strPhp=strPhp.replace("-##-","-");
                            strPhp=strPhp.replace("/##/","/");
                            strPhp=strPhp.replace("*##*","*");
                            strPhp=strPhp.replace("+##-","-");
                            strPhp=strPhp.replace("-##+","+");
                            strPhp=strPhp.replace("#00","#0");

                        }
                        else{

                            $.ajax({
                                        type:'post',
                                        url:'/calculatrice/traitement',
                                        data:{input:strPhp},
                                        success: function(data){
                                            $("#operation").text(str);
                                            strPhp=str=data;
                                            $("#res").attr("value",str);
                                            displayRes=true;
                                        },
                                        error: function(xhr, textStatus, errorThrown){
                                            alert(xhr.responseText);
                                        }
                                    });

                            
                        }
                    }
            });