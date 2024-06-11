<script lang="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
<script>
(async () => {
    const url =
        "/aktywnaszkola/wp-content/themes/aktywnaszkoła/blocks/map/xxx.xlsx";
    const data = await (await fetch(url)).arrayBuffer();
    /* data is an ArrayBuffer */
    const workbook = XLSX.read(data);

    var worksheet = XLSX.utils.sheet_to_json(workbook.Sheets.AO)
    for (var row in worksheet) {
        // for (worksheet in row) {
        // console.log(worksheet[row]);
        var name = worksheet[row]['nazwa'];
        var address = worksheet[row]['ulica'] + ', ' + worksheet[row]['pna'];
        var city = worksheet[row]['miejscowosc'];
        var sc = worksheet[row]['pna'];
        // }
        console.log(worksheet[row]['ulica'] + ', ' + worksheet[row]['pna'] + " " + worksheet[row][
            'miejscowosc'
        ]);
    }
})();
</script>