<head>

    <div class="uk-card uk-card-default uk-card-small uk-card-body">
        <form action="/lol" method="GET">
            <input type="text" class="uk-input" name="name">
            <select name="server" class="uk-select">
                <option value="euw1">euw</option>
                <option value="na1">na</option>
            </select><br />
            <input type="submit" class="uk-button-default uk-button-large" />
        </form>
    </div>
</head>

<body>
    <div class="uk-card uk-card-default uk-card-small uk-card-body" id='app'>
        <home-form></home-form>

    </div>
</body>


