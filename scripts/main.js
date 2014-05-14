$(function(){
    
    $('#btnDownload').click(function(){
        $.fancybox({
            'content' : $("#downloads").html()
        });
    });
    
    $('#btnNotasVersao').click(function(){
        $.fancybox({
            'content' : $("#notas_versao").html(),
            'width': 750,
            'autoDimensions': false,
            'autoSize': false,
            'type': 'inline'
        });
    });
    
    // share this
    stLight.options({
        publisher: "7f64b685-b185-4469-8f39-ee123177f011",
        doNotHash: true,
        doNotCopy: false,
        hashAddressBar: false
    });

});
