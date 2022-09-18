function retrieveLink(event) {
    let id = 0;
    const button = event.target;
    const operation = document.getElementById(button);

    switch (operation) {
        case "ib":
            id = 1;
            break;
        case "witch":
            id = 2;
            break;
        case "mad":
            id = 3;
            break;
        case "misao":
            id = 4;
            break;
        case "crooked":
            id = 5;
            break;
        case "paranoiac":
            id = 6;
            break;
        case "insanity":
            id = 7;
            break;
        case "kinder":
            id = 8;
            break;
        case "mermaid":
            id = 9;
            break;
        case "sandman":
            id = 10;
            break;
        case "blight":
            id = 11;
            break;
        case "blank":
            id = 12;
            break;
        case "boogie":
            id = 13;
            break;
        case "hanged":
            id = 14;
            break;
    }
    window.g_id = id;
}