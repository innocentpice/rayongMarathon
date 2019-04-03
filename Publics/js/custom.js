 $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;
      var calendarOpts = {
        type: 'date',
        formatter: {
            date: function (date, settings) {
                if (!date) return '';
                var day = date.getDate() + '';
                if (day.length < 2) {
                    day = '0' + day;
                }
                var month = (date.getMonth() + 1) + '';
                if (month.length < 2) {
                    month = '0' + month;
                }
                var year = date.getFullYear();
                return year + '-' + month + '-' + day;
            }
        },
        onChange: (date, text, mode)=>{
          var a = date;
          var b = new Date();
          var c = (b.getFullYear() - a.getFullYear());
          var d;
          if(c<0){
            d = 0;
          }else if(c<=19){
            d = 19;
          }else if(c<=29){
            d = 20;
          }else if(c<=39){
            d = 30;
          }else if(c<=49){
            d = 40;
          }else if(c<=59){
            d = 50;
          }else{
            d = 60;
          }
          if(d == 0){
            $('#age_group').val(undefined);
            return false;
          }else{
            $('#age_group').val(d);
          }
        }
      };
      
      $('#context1 .menu .item')
        .tab()
      ;
      $('#context2 .menu .item')
        .tab()
      ;
      
      $('#confirm').click(()=>{
          if($('#confirm:checked').val() == 'on'){
            $('#regis_submit').removeClass('disabled');
          }else{
            $('#regis_submit').addClass('disabled');
          }
      });
      $('#birthday').calendar(calendarOpts);
      $('.selection.dropdown')
        .dropdown()
      ;
      
      $('#regis').click((e)=>{
        if($('#regis:checked').val() == 'on'){
          $('#regis_password, #regis_confirm').css('display','block');
        }else{
          $('#regis_password, #regis_confirm').css('display','none');
        }
      });
      
    })
  ;