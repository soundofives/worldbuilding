var FTBCOM = null;

// The following function will position a div dead center in the viewport both width and height. 
// Window resized, scrolled, whatever. Cross browser, too, although I haven't tested it thoroughly. 
// Verbose, but all the better to understand what it's measuring and doing...
function showdeadcenterdiv(Xwidth,Yheight,divid) 
{ 
    // First, determine how much the visitor has scrolled

    var scrolledX, scrolledY; 
    if( self.pageYoffset ) { 
        scrolledX = self.pageXoffset; 
        scrolledY = self.pageYoffset; 
    } else if( document.documentElement && document.documentElement.scrollTop ) { 
        scrolledX = document.documentElement.scrollLeft; 
        scrolledY = document.documentElement.scrollTop; 
    } else if( document.body ) { 
        scrolledX = document.body.scrollLeft; 
        scrolledY = document.body.scrollTop; 
    }

    // Next, determine the coordinates of the center of browser's window

    var centerX, centerY; 
    if( self.innerHeight ) { 
        centerX = self.innerWidth; 
        centerY = self.innerHeight; 
    } else if( document.documentElement && document.documentElement.clientHeight ) { 
        centerX = document.documentElement.clientWidth; 
        centerY = document.documentElement.clientHeight; 
    } else if( document.body ) { 
        centerX = document.body.clientWidth; 
        centerY = document.body.clientHeight; 
    }

    // Xwidth is the width of the div, Yheight is the height of the 
    // div passed as arguments to the function: 
    var leftoffset = scrolledX + (centerX - Xwidth) / 2; 
    var topoffset = scrolledY + (centerY - Yheight) / 2; 
    // The initial width and height of the div can be set in the 
    // style sheet with display:none; divid is passed as an argument to // the function 
    var o=document.getElementById(divid); 
    var r=o.style; 
    r.position='absolute'; 
    r.top = topoffset + 'px'; 
    r.left = leftoffset + 'px'; 
    r.display = "block"; 
} 
 
function TestFTB()
{
    if (!FTBCOM)
    {
        alert("Cannot communucate with Family Tree Builder");
        return false;
    }
    return true;
}

function OnLoad() 
{
    setTimeout("Initialize()", 1);
}

function Initialize() 
{ 
    FTBCOM = document.createElement("OBJECT");
    FTBCOM.classid = "CLSID:2F43522E-B0C5-4FF3-9F06-4CDB90F779D5";
    
    TestFTB();
}

function EditPerson(index)
{
    if (TestFTB())
        FTBCOM.EditPerson(index);
}

function EditPersonNames(index)
{
    if (TestFTB())
        FTBCOM.EditPersonNames(index);
}

function EditPhoto(index)
{
    if (TestFTB())
        FTBCOM.EditPhoto(index);
}

function SearchPlace(place, lang)
{
    if (TestFTB())
        FTBCOM.SearchPlace(place, lang);
}

function Configure()
{
    if (TestFTB())
        FTBCOM.ConfigureChecker();
}

function Rerun()
{
    if (TestFTB())
        FTBCOM.RerunChecker();
}

function SetThresholds()
{
    if (TestFTB())
        FTBCOM.OpenOptionsDialog(3);
}

function EditFamily(index)
{
    if (TestFTB())
        FTBCOM.EditFamily(index, 0);
}

function EditFamilyChildren(index)
{
    if (TestFTB())
        FTBCOM.EditFamily(index, 1);
}

function getPosition(e) 
{
    e = e || window.event;
    var cursor = {x:0, y:0};
    if (e.pageX || e.pageY) {
        cursor.x = e.pageX;
        cursor.y = e.pageY;
    } 
    else {
        var de = document.documentElement;
        var b = document.body;
        cursor.x = e.clientX + 
            (de.scrollLeft || b.scrollLeft) - (de.clientLeft || 0);
        cursor.y = e.clientY + 
            (de.scrollTop || b.scrollTop) - (de.clientTop || 0);
    }
    return cursor;
}

function IgnoreIssue(line, type, name, issue)
{
    var text = disableRadio.replace("%TYPE%", checkTypes[type]);

    var objHeader = document.getElementById('calloutHeader');
    objHeader.innerHTML = ignoreMessage;

    var objMessage = document.getElementById('calloutMessage');
    objMessage.innerHTML = 
        "<ul style='margin-left:15px; margin-bottom:0px'>\
        <li><a href='javascript:IgnoreThisIssue(" + line + ",\"" + issue + "\")'>" + ignoreRadio + "</a></li>\
        <li><a href='javascript:DisableCheck(\"" + name + "\")'>" + text + "</a></li>\
        </ul>";

    showdeadcenterdiv(500, 200, "calloutWindow");
}

function CloseCallout()
{
    var objCalloutWindow = document.getElementById('calloutWindow');
    objCalloutWindow.style.display = "none";
}

function IgnoreThisIssue(line, issue)
{
    CloseCallout();
    
    if (TestFTB())
    {
        FTBCOM.IgnoreCheckerIssue(issue);
        var row = document.getElementById('Line_' + line);
        if (row)
        {
            var text;
            row.style.display = "none";
            ignoredIssues++;
            if (ignoredIssues == 1)
                text = ignoredOneIssueText;
            else
                text = ignoredIssuesText.replace("%NUMBER%", ignoredIssues);
            document.getElementById("ignoredIssues").innerHTML = text;
            document.getElementById("ignore").style.display = "";

            foundIssues--;
            if (foundIssues == 0)
                text = issuesFoundNoneText;
            else if (foundIssues == 1)
                text = issuesFoundOneText;
            else
                text = issuesFoundManyText.replace("%NUMBER%", foundIssues);
                
            document.getElementById("header").innerHTML = text;
        }
    }
}

function DisableCheck(name)
{
    CloseCallout();

    if (TestFTB())
        FTBCOM.DisableCheckerType(name);
}

function ResetIgnoredIssues()
{
    if (TestFTB())
        FTBCOM.ResetIgnoredCheckerIssues();
}

function SearchSurname(surname, lang)
{
    if (TestFTB())
        FTBCOM.SearchSurname(surname, lang);
}

function FindAndReplace(find, replace, lang, options)
{
    if (TestFTB())
        FTBCOM.FindAndReplace(find, replace, lang, options);
}

function Print()
{
    window.print();
}

function Save()
{
    if (TestFTB())
        FTBCOM.SaveCheckerReport();
}

function SwapSpouses(familyID, husband, wife)
{
    var header = spousesOfWrongGender.replace("%SPOUSE1%", husband).replace("%SPOUSE2%", wife); 
    var objHeader = document.getElementById('calloutHeader');
    objHeader.innerHTML = header;

    var text1 = spousesOfWrongGenderText1.replace("%HUSBAND%", husband).replace("%WIFE%", wife);
    var text2 = spousesOfWrongGenderText2.replace("%HUSBAND%", husband).replace("%WIFE%", wife);
    var objMessage = document.getElementById('calloutMessage');
    objMessage.innerHTML = 
        "<ul style='margin-left:15px; margin-bottom:0px'>\
         <li><a href='javascript:FixSpousesInFamily(\"" + familyID + "\",1)'>" + text1 + "</a></li>\
         <li><a href='javascript:FixSpousesInFamily(\"" + familyID + "\",0)'>" + text2 + "</a></li>\
         </ul>";

    showdeadcenterdiv(500, 200, "calloutWindow");
}

function SwapSpouse(familyID, name, gender)
{
    var header = spouseOfWrongGender[gender].replace("%PERSON%", name); 
    var objHeader = document.getElementById('calloutHeader');
    objHeader.innerHTML = header;

    var text1 = spouseOfWrongGenderText1[gender].replace("%PERSON%", name);
    var text2 = spouseOfWrongGenderText2[gender].replace("%PERSON%", name);
    var objMessage = document.getElementById('calloutMessage');
    objMessage.innerHTML = 
        "<ul style='margin-left:15px; margin-bottom:0px'>\
         <li><a href='javascript:FixSpousesInFamily(\"" + familyID + "\",1)'>" + text1 + "</a></li>\
         <li><a href='javascript:FixSpousesInFamily(\"" + familyID + "\",0)'>" + text2 + "</a></li>\
         </ul>";

    showdeadcenterdiv(500, 200, "calloutWindow");
}

function FixSpousesInFamily(familyID, SwapPositions)
{
    CloseCallout();

    if (TestFTB())
    {
        var result = FTBCOM.FixSpousesInFamily(familyID, SwapPositions);
        if (result)
        {
            if (confirm(issueHasBeenFixed))
                FTBCOM.RerunChecker();
       }
        else
            alert(issueHasNotBeenFixed)
    }
}

