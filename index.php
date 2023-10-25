<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "\u{1F496}";?>amo a jsz</title>
</head>
<body>
<script>
    var repeat=1
    var title=document.title
    var leng=title.length
    var start=0
    function titlemove() {
    titl=title.substring(start, leng) + title.substring(0, start)
    document.title=titl
    start++
    if (start==leng+1) {
    start=0
    if (repeat==2)
    return
    }
    setTimeout("titlemove()",100)
    }
    if (document.title)
    titlemove()
</script>			
</body>
</html>
