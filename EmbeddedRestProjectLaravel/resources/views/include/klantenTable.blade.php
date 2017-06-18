<div id="klantenGrid"></div>
<script>
    $("#klantenGrid").jsGrid({
        width: "100%",
        margin: "0",
 
        filtering: true,
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
        autoload: true,
        
        controller: {
            loadData: function (filter) {
                var data = $.Deferred();
                $.ajax({
                    type: "GET",
                    beforeSend: function(request) {
                        request.setRequestHeader("Authorization", "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImI1YzZlODI1MzkyOGQ5MDM0Y2ExMDRhMjA2OTY0ZGE5NDMwNmRmN2UzNDUxNmQzYjMwY2YyZGJiNWIwZDA1MWFlMWI0ZmQwNzhiOTlkMDJmIn0.eyJhdWQiOiIxIiwianRpIjoiYjVjNmU4MjUzOTI4ZDkwMzRjYTEwNGEyMDY5NjRkYTk0MzA2ZGY3ZTM0NTE2ZDNiMzBjZjJkYmI1YjBkMDUxYWUxYjRmZDA3OGI5OWQwMmYiLCJpYXQiOjE0OTMxOTIxMDAsIm5iZiI6MTQ5MzE5MjEwMCwiZXhwIjoxNTI0NzI4MTAwLCJzdWIiOiIxIiwic2NvcGVzIjpbInJlYWQtbG9ncyIsIndyaXRlLWxvZ3MiLCJ1cGRhdGUtbG9ncyJdfQ.1ZyKlLBcdFovCyKKyBntdXy1TL1beLk3vvaHK3gPW9odxztrqG7T4Lm77h40kWTZ2UEgiAyTXZnLjtVKs6HvZIt6zpnf7FNy222y8XmXOV0xrD4tN1OAPLHifbmNi4_V6za5hj9l-Miplcyq7TF5Am-TDoVUshR3GWkJKQGoaR0erxQ5TmNUv9nRnGkyo_IT_NqzGOHn_TmacdNgtJEeAxcZDy7mnWyooqeysmxSsOSK-KxMuI96Ja0ayernf7QVPMOQ4ETQ1ruSmn-PtFLOMMo-1xetGSyGS5kI6mGKG60wilr0eWi9GCtqqsvoeTDNs4cs-jpNEymgVBiQiCOIzadjFIRiXLSXqEpP4x93SC8FugNey3Vw4pjnp5mOR-OnWl_rMGYJ5IdPtblpvcrBLt6HWASZqjIPVljwClwY4RiVzqpUuqdwtbK6Ht_0vSXLRwzwXLtk1tLNcvhz0fzpItkj4zE6j1nTyBDgh5d4bhsduLPtO01yX2uVkpGzfb7EymwAl7wH_EdgIbQ4l-Qlj1dhi1E9AacAtTtoPfDpxk6tLe3SZ3BBbICgFXmDfckANzYFiRp98J0lq1-2gY9eLutYcJp9xEYkfGQOdu_xeDjwM9kliAikBqCQ5SASHuEv-0E5AR0C32NeEVlZThlNYBAjBtlznlXo26L4Dxs81YA");
                        request.setRequestHeader("Accept", "application/json");
                    },
                    url: "/api/v1/GET/klanten",
                    dataType: "json"
                }).done(function(response){
                    var filteredResponse = $.grep(response, function(object) {
                        return (!filter.Klant_ID || String(object.Klant_ID).indexOf(filter.Klant_ID) > -1)
                            && (!filter.Klantnaam || String(object.Klantnaam).indexOf(filter.Klantnaam) > -1)
                            && (!filter.Adres || String(object.Adres).indexOf(filter.Adres) > -1)
                            && (!filter.Telnr || String(object.Telnr).indexOf(filter.Telnr) > -1)
                            && (filter.Email === undefined || String(object.Email).indexOf(filter.Email) > -1);
                    });
                    data.resolve(filteredResponse);
                });
                return data.promise();
            },
            updateItem: function(item) {
                return $.ajax({
                    type: "POST",
                    beforeSend: function(request) {
                        request.setRequestHeader("Authorization", "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImI1YzZlODI1MzkyOGQ5MDM0Y2ExMDRhMjA2OTY0ZGE5NDMwNmRmN2UzNDUxNmQzYjMwY2YyZGJiNWIwZDA1MWFlMWI0ZmQwNzhiOTlkMDJmIn0.eyJhdWQiOiIxIiwianRpIjoiYjVjNmU4MjUzOTI4ZDkwMzRjYTEwNGEyMDY5NjRkYTk0MzA2ZGY3ZTM0NTE2ZDNiMzBjZjJkYmI1YjBkMDUxYWUxYjRmZDA3OGI5OWQwMmYiLCJpYXQiOjE0OTMxOTIxMDAsIm5iZiI6MTQ5MzE5MjEwMCwiZXhwIjoxNTI0NzI4MTAwLCJzdWIiOiIxIiwic2NvcGVzIjpbInJlYWQtbG9ncyIsIndyaXRlLWxvZ3MiLCJ1cGRhdGUtbG9ncyJdfQ.1ZyKlLBcdFovCyKKyBntdXy1TL1beLk3vvaHK3gPW9odxztrqG7T4Lm77h40kWTZ2UEgiAyTXZnLjtVKs6HvZIt6zpnf7FNy222y8XmXOV0xrD4tN1OAPLHifbmNi4_V6za5hj9l-Miplcyq7TF5Am-TDoVUshR3GWkJKQGoaR0erxQ5TmNUv9nRnGkyo_IT_NqzGOHn_TmacdNgtJEeAxcZDy7mnWyooqeysmxSsOSK-KxMuI96Ja0ayernf7QVPMOQ4ETQ1ruSmn-PtFLOMMo-1xetGSyGS5kI6mGKG60wilr0eWi9GCtqqsvoeTDNs4cs-jpNEymgVBiQiCOIzadjFIRiXLSXqEpP4x93SC8FugNey3Vw4pjnp5mOR-OnWl_rMGYJ5IdPtblpvcrBLt6HWASZqjIPVljwClwY4RiVzqpUuqdwtbK6Ht_0vSXLRwzwXLtk1tLNcvhz0fzpItkj4zE6j1nTyBDgh5d4bhsduLPtO01yX2uVkpGzfb7EymwAl7wH_EdgIbQ4l-Qlj1dhi1E9AacAtTtoPfDpxk6tLe3SZ3BBbICgFXmDfckANzYFiRp98J0lq1-2gY9eLutYcJp9xEYkfGQOdu_xeDjwM9kliAikBqCQ5SASHuEv-0E5AR0C32NeEVlZThlNYBAjBtlznlXo26L4Dxs81YA");
                        request.setRequestHeader("Accept", "application/json");
                    },
                    url: "/api/v1/POST/update/klanten/"+item.Klant_ID,
                    data: item
                });
            },
            insertItem: function (item) {
                var data = $.Deferred();
                return $.ajax({
                    type: "POST",
                    beforeSend: function(request) {
                        request.setRequestHeader("Authorization", "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImI1YzZlODI1MzkyOGQ5MDM0Y2ExMDRhMjA2OTY0ZGE5NDMwNmRmN2UzNDUxNmQzYjMwY2YyZGJiNWIwZDA1MWFlMWI0ZmQwNzhiOTlkMDJmIn0.eyJhdWQiOiIxIiwianRpIjoiYjVjNmU4MjUzOTI4ZDkwMzRjYTEwNGEyMDY5NjRkYTk0MzA2ZGY3ZTM0NTE2ZDNiMzBjZjJkYmI1YjBkMDUxYWUxYjRmZDA3OGI5OWQwMmYiLCJpYXQiOjE0OTMxOTIxMDAsIm5iZiI6MTQ5MzE5MjEwMCwiZXhwIjoxNTI0NzI4MTAwLCJzdWIiOiIxIiwic2NvcGVzIjpbInJlYWQtbG9ncyIsIndyaXRlLWxvZ3MiLCJ1cGRhdGUtbG9ncyJdfQ.1ZyKlLBcdFovCyKKyBntdXy1TL1beLk3vvaHK3gPW9odxztrqG7T4Lm77h40kWTZ2UEgiAyTXZnLjtVKs6HvZIt6zpnf7FNy222y8XmXOV0xrD4tN1OAPLHifbmNi4_V6za5hj9l-Miplcyq7TF5Am-TDoVUshR3GWkJKQGoaR0erxQ5TmNUv9nRnGkyo_IT_NqzGOHn_TmacdNgtJEeAxcZDy7mnWyooqeysmxSsOSK-KxMuI96Ja0ayernf7QVPMOQ4ETQ1ruSmn-PtFLOMMo-1xetGSyGS5kI6mGKG60wilr0eWi9GCtqqsvoeTDNs4cs-jpNEymgVBiQiCOIzadjFIRiXLSXqEpP4x93SC8FugNey3Vw4pjnp5mOR-OnWl_rMGYJ5IdPtblpvcrBLt6HWASZqjIPVljwClwY4RiVzqpUuqdwtbK6Ht_0vSXLRwzwXLtk1tLNcvhz0fzpItkj4zE6j1nTyBDgh5d4bhsduLPtO01yX2uVkpGzfb7EymwAl7wH_EdgIbQ4l-Qlj1dhi1E9AacAtTtoPfDpxk6tLe3SZ3BBbICgFXmDfckANzYFiRp98J0lq1-2gY9eLutYcJp9xEYkfGQOdu_xeDjwM9kliAikBqCQ5SASHuEv-0E5AR0C32NeEVlZThlNYBAjBtlznlXo26L4Dxs81YA");
                        request.setRequestHeader("Accept", "application/json");
                    },
                    url: "/api/v1/POST/create/klanten",
                    data: item
                }).done(function(response){
                    data.resolve(response);
                });
                return data.promise();
            },
            deleteItem: function (item) {
                return $.ajax({
                    type: "DELETE",
                    beforeSend: function(request) {
                        request.setRequestHeader("Authorization", "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImI1YzZlODI1MzkyOGQ5MDM0Y2ExMDRhMjA2OTY0ZGE5NDMwNmRmN2UzNDUxNmQzYjMwY2YyZGJiNWIwZDA1MWFlMWI0ZmQwNzhiOTlkMDJmIn0.eyJhdWQiOiIxIiwianRpIjoiYjVjNmU4MjUzOTI4ZDkwMzRjYTEwNGEyMDY5NjRkYTk0MzA2ZGY3ZTM0NTE2ZDNiMzBjZjJkYmI1YjBkMDUxYWUxYjRmZDA3OGI5OWQwMmYiLCJpYXQiOjE0OTMxOTIxMDAsIm5iZiI6MTQ5MzE5MjEwMCwiZXhwIjoxNTI0NzI4MTAwLCJzdWIiOiIxIiwic2NvcGVzIjpbInJlYWQtbG9ncyIsIndyaXRlLWxvZ3MiLCJ1cGRhdGUtbG9ncyJdfQ.1ZyKlLBcdFovCyKKyBntdXy1TL1beLk3vvaHK3gPW9odxztrqG7T4Lm77h40kWTZ2UEgiAyTXZnLjtVKs6HvZIt6zpnf7FNy222y8XmXOV0xrD4tN1OAPLHifbmNi4_V6za5hj9l-Miplcyq7TF5Am-TDoVUshR3GWkJKQGoaR0erxQ5TmNUv9nRnGkyo_IT_NqzGOHn_TmacdNgtJEeAxcZDy7mnWyooqeysmxSsOSK-KxMuI96Ja0ayernf7QVPMOQ4ETQ1ruSmn-PtFLOMMo-1xetGSyGS5kI6mGKG60wilr0eWi9GCtqqsvoeTDNs4cs-jpNEymgVBiQiCOIzadjFIRiXLSXqEpP4x93SC8FugNey3Vw4pjnp5mOR-OnWl_rMGYJ5IdPtblpvcrBLt6HWASZqjIPVljwClwY4RiVzqpUuqdwtbK6Ht_0vSXLRwzwXLtk1tLNcvhz0fzpItkj4zE6j1nTyBDgh5d4bhsduLPtO01yX2uVkpGzfb7EymwAl7wH_EdgIbQ4l-Qlj1dhi1E9AacAtTtoPfDpxk6tLe3SZ3BBbICgFXmDfckANzYFiRp98J0lq1-2gY9eLutYcJp9xEYkfGQOdu_xeDjwM9kliAikBqCQ5SASHuEv-0E5AR0C32NeEVlZThlNYBAjBtlznlXo26L4Dxs81YA");
                        request.setRequestHeader("Accept", "application/json");
                    },
                    url: "/api/v1/DELETE/klanten/"+item.Klant_ID          
                });
            }
        },
 
        pageSize: 10,
        pageButtonCount: 5,
 
        deleteConfirm: "Do you really want to delete the client?",
        
        fields: [
            { name: "Klant_ID", title: "ID", type: "text", width: 50, inserting: false, editing: false},
            { name: "Klantnaam", type: "text", width: 125 },
            { name: "Adres", type: "text", width: 175 },
            { name: "Telnr", type: "number", title: "Tel nr.", width: 75},
            { name: "Email", type: "text", width: 200 },
            { type: "control"}
        ]
    });
</script>
