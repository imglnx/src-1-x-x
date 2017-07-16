$(function(){

    var ul = $('#uploads ul');

    $('#drop a').click(function(){
        // Simulate a click on the file input button
        // to show the file browser dialog
        $(this).parent().find('input').click();
    });

    // Initialize the jQuery File Upload plugin
    $('#upload').fileupload({

        // This element will accept file drag/drop uploading
        dropZone: $('#drop'),

        // This function is called when a file is added to the queue;
        // either via the browse button, or via drag/drop:
        add: function (e, data) {

            var tpl = $('<li class="working"><input type="text" value="0" data-width="48" data-height="48"'+
                ' data-fgColor="#0788a5" data-readOnly="1" data-bgColor="#3e4043" /><p></p><span></span></li>');

            // Append the file name and file size
            //tpl.find('p').text(data.files[0].name).append('<i>' + formatFileSize(data.files[0].size) + '</i>');

            // Add the HTML to the UL element
            //data.context = tpl.appendTo(ul);

            // Initialize the knob plugin
            tpl.find('input').knob();

            // Listen for clicks on the cancel icon
            tpl.find('span').click(function(){

                if(tpl.hasClass('working')){
                    jqXHR.abort();
                }

                tpl.fadeOut(function(){
                    tpl.remove();
                });

            });

            // Automatically upload the file once it is added to the queue
            var jqXHR = data.submit();
        },

        done: function(e, data) {
            var r = data.result;
            var json = $.parseJSON(r);
            
            if (json['error'] == false && json['success'] == true) { 
                var tpl = $('<li class="working"><img src="'+json['link']+'" /><p class="title"></p>'+
               // var tpl = $('<li class="working"><img src="/includes/img.php?ext='+json['extension']+'" /><p class="title"></p>'+
                    '<span class="icons">'+
                    '<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A//imglnx.com/'+json['link']+'"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>&nbsp;&nbsp;'+
                    '<a target="_blank" href="https://twitter.com/home?status=https%3A//imglnx.com/'+json['link']+'%20%40imglnx"><i class="fa fa-twitter" aria-hidden="true"></i></a>&nbsp;&nbsp;'+
                    '<a target="_blank" href="'+json['link']+'"><i class="fa fa-external-link" aria-hidden="true"></i></a>'+
                    '</span></li>');

                // Append the file name and file size
                tpl.find('p').html('<a target="_blank" href="'+json['link']+'">'+data.files[0].name.substr(0, 40)+'</a>').append('&nbsp;&nbsp;<i>' + formatFileSize(data.files[0].size) + '</i>');

                // Add the HTML to the UL element
                data.context = tpl.appendTo(ul);
            } else {
                var tpl = $('<li class="working"><img src="/assets/img/error_ue.jpg" /><p></p><span></span></li>');

                tpl.find('p').text(data.files[0].name.substr(0, 40)).append('&nbsp;&nbsp;<i>'+json['error']+'</i>');

                // Add the HTML to the UL element
                data.context = tpl.appendTo(ul); 
            }
        },

        fail:function(e, data){
            // Something has gone wrong!
            data.context.addClass('error');
        }
    });


    // Prevent the default action when a file is dropped on the window
    $(document).on('drop dragover', function (e) {
        e.preventDefault();
    });

    // Helper function that formats the file sizes
    function formatFileSize(bytes) {
        if (typeof bytes !== 'number') {
            return '';
        }

        if (bytes >= 1000000000) {
            return (bytes / 1000000000).toFixed(2) + ' GB';
        }

        if (bytes >= 1000000) {
            return (bytes / 1000000).toFixed(2) + ' MB';
        }

        return (bytes / 1000).toFixed(2) + ' KB';
    }
});