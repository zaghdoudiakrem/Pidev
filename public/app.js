function sortByDate() {
    $.ajax({
         url: '/sort-constat-by-date',
         type: 'GET',
         dataType: 'json',
         success: function (data) {
             // Vider la liste actuelle des constats
             $('#constats-list').empty();
             // Ajouter chaque constat trié à la liste
             $.each(data, function (index, constat) {
                 var li = '<li>' + constat.nomclient_e + ' - ' + constat.Date_creation + '</li>';
                 $('#constats-list').append(li);
             });
         }
     });
}
 
$('#sort-by-date-button').click(function () {
         sortByDate();
});
 