<?php

/**
 * ����
 */
$.ajax({
    url: "http://www.hzhuti.com",    //�����url��ַ
    dataType: "json",   //���ظ�ʽΪjson
    async: true, //�����Ƿ��첽��Ĭ��Ϊ�첽����Ҳ��ajax��Ҫ����
    data: { "id": "value" },    //����ֵ
    type: "GET",   //����ʽ
    beforeSend: function() {
        //����ǰ�Ĵ���
    },
    success: function(req) {
        //����ɹ�ʱ����
    },
    complete: function() {
        //������ɵĴ���
    },
    error: function() {
        //���������
    }
});
//1.$.ajax��json���ݵ��첽����
var aj = $.ajax( {  
    url:'productManager_reverseUpdate',// ��ת�� action  
    data:{  
             selRollBack : selRollBack,  
             selOperatorsCode : selOperatorsCode,  
             PROVINCECODE : PROVINCECODE,  
             pass2 : pass2  
    },  
    type:'post',  
    cache:false,  
    dataType:'json',  
    success:function(data) {  
        if(data.msg =="true" ){  
            // view("�޸ĳɹ���");  
            alert("�޸ĳɹ���");  
            window.location.reload();  
        }else{  
            view(data.msg);  
        }  
     },  
     error : function() {  
          // view("�쳣��");  
          alert("�쳣��");  
     }  
});

//2.$.ajax���л��������Ϊ�ַ������첽����
function noTips(){  
    var formParam = $("#form1").serialize();//���л��������Ϊ�ַ���  
    $.ajax({  
        type:'post',      
        url:'Notice_noTipsNotice',  
        data:formParam,  
        cache:false,  
        dataType:'json',  
        success:function(data){  
        }  
    });  
} 

//3.$.ajaxƴ��url���첽����
var yz=$.ajax({  
     type:'post',  
     url:'validatePwd2_checkPwd2?password2='+password2,  
     data:{},  
     cache:false,  
     dataType:'json',  
     success:function(data){  
          if( data.msg =="false" ) //����������false���ͽ�validatePassword2��ֵ��Ϊpwd2Error�������첽����Ҫ���Ƿ���ʱ��  
          {  
               textPassword2.html("<font color='red'>ҵ�����벻��ȷ��</font>");  
               $("#validatePassword2").val("pwd2Error");  
               checkPassword2 = false;  
               return;  
           }  
      },  
      error:function(){}  
});

//4.$.ajaxƴ��data���첽����
$.ajax({   
    url:'<%=request.getContextPath()%>/kc/kc_checkMerNameUnique.action',   
    type:'post',   
    data:'merName='+values,   
    async : false, //Ĭ��Ϊtrue �첽   
    error:function(){   
       alert('error');   
    },   
    success:function(data){   
       $("#"+divs).html(data);   
    }
});

//5
//ajax����id��php��ȡ��������
$.ajax({
    data: "village_id="+village_id,
    type: "post",  
    url: "{:U('Admin/Farmer/getFarmerTechnician')}",
    success: function(string) {
        $('#farmer_technician').html(string);
        $.getScript('__PUBLIC__/Admin/js/plugins/chosen/chosen.jquery.js');
        $.getScript('__PUBLIC__/Admin/js/demo/form-advanced-demo.js'); 
    },
    error: function(error) {  
        alert('error:'+error);
    }  
});