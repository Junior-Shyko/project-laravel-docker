var custom = {
  successNotify () { 
    new PNotify({
      title: 'Success',
      text: message,
      type: 'success',
      icon: 'fa fa-check'
    }); 
  },
  //AAGUARDE
  loadNotfy()
  {
    new PNotify({
      title: 'Aguarde',
      text: 'Sua solicitação ja está sendo processada',
      icon: 'fa fa-spinner fa-pulse fa-2x fa-fw',
      hide: false,
      type: 'info',
      addclass: 'stack-modal',
      stack: {'dir1': 'down', 'dir2': 'right', 'modal': true}
    });
  },

  deleteNotify(){
        new PNotify({
          title: 'Confirmation Needed',
          text: 'Are you sure?',
          icon: 'glyphicon glyphicon-question-sign',
          hide: false,
          confirm: {
            confirm: true
          },
          buttons: {
            closer: false,
            sticker: false
          },
          history: {
            history: false
          },
          addclass: 'stack-modal',
          stack: {'dir1': 'down', 'dir2': 'right', 'modal': true}
        }).get().on('pnotify.confirm', function(){
          alert('Ok, cool.');
        }).on('pnotify.cancel', function(){
          alert('Oh ok. Chicken, I see.');
        }); 
  }
};

export default custom