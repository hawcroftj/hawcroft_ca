var navElement = document.getElementById("nav");
var bodyElement = document.getElementById("body");
var bannerElement = document.getElementById("banner");
var footerElement = document.getElementById("footer");
var elementsArr = [navElement, bodyElement, bannerElement, footerElement];
// add onClick listener to footer text for swapping modes
var modeButton = document.getElementById("changeMode");
modeButton.addEventListener("click", function(){ changeMode() });
var modeFlag = "day";

// determines the current mode and switches to the opposite mode
function changeMode() {
    if(modeFlag == "day") {
        nightMode();
        modeFlag = "night";
        modeButton.textContent = "Day Mode";
    } else {
        dayMode();
        modeFlag = "day";
        modeButton.textContent = "Night Mode";
    }
}

function nightMode() {
    // remove old colour class(es) before applying new one(s)
    var i;
    for(i = 0; i < elementsArr.length; i++) {
        removeBackgroundColourClasses(elementsArr[i]);
    }

    // add dark colour class as night mode background colour
    applyColourClasses(navElement, "colour-d2");
    applyColourClasses(bodyElement, "colour-d2");
    applyColourClasses(bannerElement, "colour-d1");
    applyColourClasses(footerElement, "colour-d1");
    // brighten the text against the dark background
    removeTextColourClasses(bannerElement);
    applyColourClasses(bannerElement, "text-l2");
}

function dayMode() {
    // remove old colour class(es) before applying new one(s)
    var i;
    for(i = 0; i < elementsArr.length; i++) {
        removeBackgroundColourClasses(elementsArr[i]);
    }

    // add light and primary colour class(es) as day mode background colour
    applyColourClasses(navElement, "colour-p");
    applyColourClasses(bodyElement, "colour-p");
    applyColourClasses(bannerElement, "colour-l1");
    applyColourClasses(footerElement, "colour-p");
    // darken the text against the light background
    removeTextColourClasses(bannerElement);
    applyColourClasses(bannerElement, "text-d2");
}

function applyColourClasses(element, colourClass) {
    // add desired colourClass background colour (see custom.css)
    // += ensures all other classes remain by adding to the class tag
    element.className += ' ' + colourClass;
}

function removeBackgroundColourClasses(element) {
    // regex explanation:
    // "\bcolour-"  removes classes beginning with "colour-"
    // "[ldp]"      after the hyphen, removes l, d, or p characters (see custom.css)
    // "[\d]?\b"    removes a single digit if present
    element.className = element.className.replace( /\b ?colour-[ldp][\d]?\b/g, '' );
}

function removeTextColourClasses(element) {
    // for regex explanation, see removeBackgroundColourClasses
    element.className = element.className.replace( /\b ?text-[ldp][\d]?\b/g, '' );
}