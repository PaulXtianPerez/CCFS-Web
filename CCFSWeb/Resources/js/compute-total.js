//Compute total days and total fees in school year ui.
$(document).ready(function(){
  $('.form-group').on('input','.attNum', function(){
    var totalSum = 0;
    $('.form-group .attNum').each(function(){
      var inputVal = $(this).val();
      if($.isNumeric(inputVal)){
        totalSum += parseFloat(inputVal);
      }
    });
    $('#totalDays').text(totalSum);
  });

  $('.form-group').on('input','.nurNum', function(){
    var totalSum = 0;
    $('.form-group .nurNum').each(function(){
      var inputVal = $(this).val();
      if($.isNumeric(inputVal)){
        totalSum += parseFloat(inputVal);
      }
    });
    $('#nurTotal').text(totalSum);
  });

  $('.form-group').on('input','.preNum', function(){
    var totalSum = 0;
    $('.form-group .preNum').each(function(){
      var inputVal = $(this).val();
      if($.isNumeric(inputVal)){
        totalSum += parseFloat(inputVal);
      }
    });
    $('#preTotal').text(totalSum);
  });

  $('.form-group').on('input','.kinNum', function(){
    var totalSum = 0;
    $('.form-group .kinNum').each(function(){
      var inputVal = $(this).val();
      if($.isNumeric(inputVal)){
        totalSum += parseFloat(inputVal);
      }
    });
    $('#kinTotal').text(totalSum);
  });

  $('.form-group').on('input','.oneNum', function(){
    var totalSum = 0;
    $('.form-group .oneNum').each(function(){
      var inputVal = $(this).val();
      if($.isNumeric(inputVal)){
        totalSum += parseFloat(inputVal);
      }
    });
    $('#oneTotal').text(totalSum);
  });

  $('.form-group').on('input','.twoNum', function(){
    var totalSum = 0;
    $('.form-group .twoNum').each(function(){
      var inputVal = $(this).val();
      if($.isNumeric(inputVal)){
        totalSum += parseFloat(inputVal);
      }
    });
    $('#twoTotal').text(totalSum);
  });

  $('.form-group').on('input','.threeNum', function(){
    var totalSum = 0;
    $('.form-group .threeNum').each(function(){
      var inputVal = $(this).val();
      if($.isNumeric(inputVal)){
        totalSum += parseFloat(inputVal);
      }
    });
    $('#threeTotal').text(totalSum);
  });

  $('.form-group').on('input','.fourNum', function(){
    var totalSum = 0;
    $('.form-group .fourNum').each(function(){
      var inputVal = $(this).val();
      if($.isNumeric(inputVal)){
        totalSum += parseFloat(inputVal);
      }
    });
    $('#fourTotal').text(totalSum);
  });

  $('.form-group').on('input','.fiveNum', function(){
    var totalSum = 0;
    $('.form-group .fiveNum').each(function(){
      var inputVal = $(this).val();
      if($.isNumeric(inputVal)){
        totalSum += parseFloat(inputVal);
      }
    });
    $('#fiveTotal').text(totalSum);
  });

  $('.form-group').on('input','.sixNum', function(){
    var totalSum = 0;
    $('.form-group .sixNum').each(function(){
      var inputVal = $(this).val();
      if($.isNumeric(inputVal)){
        totalSum += parseFloat(inputVal);
      }
    });
    $('#sixTotal').text(totalSum);
  });
});
