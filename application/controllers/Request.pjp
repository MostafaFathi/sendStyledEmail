<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'third_party/PHPMailer/src/PHPMailer.php');
require_once(APPPATH.'third_party/PHPMailer/src/SMTP.php');
require_once(APPPATH.'third_party/PHPMailer/src/Exception.php');

class Request extends CI_Controller {


    public function get_excel_array()
    {
      return $excel_array = array(
          "excel_1"=>array("Introduction to the Excel 2016 Interface",1,25),
          "excel_2"=>array("(The Ribbon, The Backstage View& The Quick Access Toolbar)",1,15),
          "excel_3"=>array("Zooming in and out of a worksheet",1,5),
          "excel_4"=>array("Navigating and selecting cells",1,20),
          "excel_5" => array("Keyboard Shortcuts",1,10),
          "excel_6" => array("Entering and editing data",1,15),
          "excel_7" => array("Deleting/replacing cell data",1,5),
          "excel_8" => array("Performing simple calculations",1,15),
          "excel_9" => array("Saving the workbook file",1,10),
          "excel_10" => array("Checking compatibility with older versions of Excel",1,10),
          "excel_11" => array("Overview of the Formulas Ribbon",1,10),
          "excel_12" => array("Building basic Formulas",1,30),
          "excel_13" => array("Using simple Functions",1,20),
          "excel_14" => array("Copying formulas/functions with the AutoFill command",1,15),
          "excel_15" => array("Using Relative and Absolute cell references in calculations",1,20),
          "excel_16" => array("Inserting rows & columns",2,15),
          "excel_17" => array("Moving & copying data",2,15),
          "excel_18" => array("Using AutoFill to complete a series of values",2,20),
          "excel_19" => array("Introduction to worksheet Themes",2,20),
          "excel_20" => array("Formatting worksheet data/using Cell Styles",2,30),
          "excel_21" => array("Using Excel templates/creating custom templates",2,15),
          "excel_22" => array("Managing worksheets: inserting, deleting, renaming, move/copy",2,15),
          "excel_23" => array("Grouping worksheets",2,15),
          "excel_24" => array("Freezing or splitting panes",2,10),
          "excel_25" => array("Creating custom views",2,10),
          "excel_26" => array("Spell checking your worksheets",2,5),
          "excel_27" => array("Setting print options through Page Setup",2,15),
          "excel_28" => array("Using the Page Layout view",2,15),
          "excel_29" => array("Printing your worksheet",2,10),
          "excel_30" => array("Overview of List design",3,15),
          "excel_31" => array("Formatting lists as Tables",3,15),
          "excel_32" => array("Single and Multi-level Sorting",3,25),
          "excel_33" => array("Removing duplicates from a list or table",3,10),
          "excel_34" => array("Filtering records in a list or table",3,25),
          "excel_35" => array("Search by Filter",3,5),
          "excel_36" => array("Inserting automatic subtotals in a list",3,15),
          "excel_37" => array("Using the Quick Analysis Tools",3,10),
          "excel_38" => array("Inserting data charts",3,20),
          "excel_39" => array("Formatting and editing chart elements",3,45),
          "excel_40" => array("Adding/removing data from a chart",3,10),
          "excel_41" => array("Creating custom chart templates",3,10),
          "excel_42" => array("Printing charts",3,5),
          "excel_43" => array("Changing table and chart formatting through Themes",3,10),
          "excel_44" => array("Inserting Sparkline",3,15),
          "excel_45" => array("Importing data from other sources",4,20),
          "excel_46" => array("Overview of exporting options",4,10),
          "excel_47" => array("Creating a database query",4,15),
          "excel_48" => array("Creating Pivot Tables from lists or tables",4,40),
          "excel_49" => array("Filtering Pivot Tables",4,10),
          "excel_50" => array("Using the Slicer tool within a Pivot Table",4,10),
          "excel_51" => array("Working with Pivot charts",4,15),
          "excel_52" => array("Applying Data Validation rules",4,20),
          "excel_53" => array("Applying built in Conditional Formatting",4,25),
          "excel_54" => array("Creating custom conditional formats",4,10),
          "excel_55" => array("Inserting & editing Comments",4,10),
          "excel_56" => array("Linking Data",4,20),
          "excel_57" => array("Cell, sheet, and file protection",4,20),
          "excel_58" => array("Creating and applying Names in a worksheet",5,15),
          "excel_59" => array("Using the IF function",5,25),
          "excel_60" => array("Introduction to nesting functions",5,45),
          "excel_61" => array("Using the formula auditing tools",5,20),
          "excel_62" => array("Using the LOOKUP functions",5,30),
          "excel_63" => array("Using SUMIF(S), COUNTIF(S), AVERAGEIF(S) functions",5,30),
          "excel_64" => array("Using the IFERROR function",5,10),
          "excel_65" => array("Other useful functions: Database Functions",5,10),
          "excel_66" => array("Other useful functions: Text Functions",5,15),
          "excel_67" =>array( "Other useful functions: Date & Time Functions",5,15),
          "excel_68" => array("Other useful functions: Additional Functions (Concatenate & Text to Columns)",5,10),
          "excel_69" => array("Using the Consolidate Data commands",6,20),
          "excel_70" => array("Using the Goal Seek",6,15),
          "excel_71" => array("Using the Solver tool",6,30),
          "excel_72" => array("Creating Data Tables",6,20),
          "excel_73" => array("Using the Scenario Manager",6,15),
          "excel_74" => array("Adding the Developer Tab to the Ribbon",6,5),
          "excel_75" =>array( "Recording and running macros",6,30),
          "excel_76" => array("Editing macros with the Visual Basic Editor",6,20),
          "excel_77" => array("Creating buttons to run macros (Quick Access Toolbar & worksheet buttons)",6,20),
          "excel_78" => array("Microsoft OneDrive Overview",6,10),
          "excel_79" => array("Customizing the Ribbon",6,15)
      );
    }
    public function get_powerpoint_array()
    {
      return $powerpoint_array = array(
          "powerpoint_1"=>array("Introduction to the PowerPoint 2010 Interface ",1,25),
          "powerpoint_2"=>array("Overview of the various PowerPoint views",1,20),
          "powerpoint_3"=>array("Creating new presentations",1,15),
          "powerpoint_4"=>array("Inserting new slides",1,15),
          "powerpoint_5" => array("Inserting and formatting text",1,30),
          "powerpoint_6" => array("Adding bulleted lists",1,25),
          "powerpoint_7" => array("Saving your presentation",1,15),
          "powerpoint_8" => array("Adding text boxes",1,20),
          "powerpoint_9" => array("Adding ClipArt to a slide",1,15),
          "powerpoint_10" => array("Modifying ClipArt properties",1,20),
          "powerpoint_11" => array("Importing images to the ClipArt gallery",1,10),
          "powerpoint_12" => array("Applying WordArt styles",1,15),
          "powerpoint_13" => array("Introduction to Inserting Drawing Shapes and Auto Shapes",2,20),
          "powerpoint_14" => array("Formatting Drawing objects",2,25),
          "powerpoint_15" => array("Grouping and ungrouping objects",2,15),
          "powerpoint_16" => array("Layering (reordering) objects",2,10),
          "powerpoint_17" => array("Inserting & editing pictures from a file",2,20),
          "powerpoint_18" => array("Inserting Screenshots",2,15),
          "powerpoint_19" => array("Adding slide transitions",2,25),
          "powerpoint_20" => array("Introduction to animating to text and objects",2,30),
          "powerpoint_21" => array("Running a slideshow",2,20),
          "powerpoint_22" => array("Adding speaker notes",2,15),
          "powerpoint_23" => array("Printing slides, speaker notes and handouts",2,30),
          "powerpoint_24" => array("Applying different slide styles,design themes and custom backgrounds",3,25),
          "powerpoint_25" => array("Working with the slide masters",3,40),
          "powerpoint_26" => array("Adding custom slide layouts to the Master slide",3,15),
          "powerpoint_27" => array("Adding headers & footers",3,15),
          "powerpoint_28" => array("Creating custom templates",3,15),
          "powerpoint_29" => array("Creating SmartArt Diagrams",3,25),
          "powerpoint_30" => array("Converting bulleted lists into SmartArt",3,10),
          "powerpoint_31" => array("Using images to create SmartArt",3,15),
          "powerpoint_32" => array("Creating Data Charts",3,25),
          "powerpoint_33" => array("Importing an outline from a Word document",3,20),
          "powerpoint_34" => array("Linking & embedding objects from other programs into PowerPoint",3,20),
          "powerpoint_35" => array("Advanced Animation (Motion Paths, Animation Sequences)",4,30),
          "powerpoint_36" => array("Animation Painter",4,5),
          "powerpoint_37" => array("Automate a slideshow / Rehearse timings",4,20),
          "powerpoint_38" => array("Creating a PowerPoint Photo Album",4,10),
          "powerpoint_39" => array("Adding music and video to a presentation",4,20),
          "powerpoint_40" => array("Add video from the web",4,10),
          "powerpoint_41" => array("Overview of video editing options",4,15),
          "powerpoint_42" => array("Using the pen & highlighter tools during a presentation",4,10),
          "powerpoint_43" => array("Slideshow keyboard shortcuts",4,10),
          "powerpoint_44" => array("Using Word to create handouts",4,15),
          "powerpoint_45" => array("Creating custom slide shows",4,10),
          "powerpoint_46" => array("Saving a presentation as a PowerPoint show only",4,10),
          "powerpoint_47" => array("Inserting hyperlinks and action buttons",4,15),
          "powerpoint_48" => array("Saving a presentation for use on the web",4,10),
          "powerpoint_49" => array("Broadcast a Presentation via the web",4,15),
          "powerpoint_50" => array("Save a Presentation as a Video",4,10),
          "powerpoint_51" => array("Package a presentation for CD (or other storage device)",4,10)
      );
    }
    public function get_outlook_array()
    {
        return $outlook_array = array(
            "outlook_1"=>array("Introduction to the Outlook Interface (The Ribbon, the Backstage View & Quick Access toolbar)",1,25),
            "outlook_2"=>array("Introduction overview of using Outlook with and without an Exchange Server",1,10),
            "outlook_3"=>array("Navigating through Outlook",1,10),
            "outlook_4"=>array("Creating and sending new mail",1,15),
            "outlook_5" => array("Mail message options",1,15),
            "outlook_6" => array("Attaching a file to a message",1,10),
            "outlook_7" => array("Viewing and responding to mail",1,10),
            "outlook_8" => array("Sorting messages & using the Conversation view",1,15),
            "outlook_9" => array("Flagging and Categorizing email",1,20),
            "outlook_10" => array("Creating custom categories",1,10),
            "outlook_11" => array("Overview of the To-Do Bar",1,10),
            "outlook_12" => array("Printing and deleting messages",1,10),
            "outlook_13" => array("Creating and editing a new contact",1,15),
            "outlook_14" => array("Sorting and finding contacts",1,10),
            "outlook_15" => array("Creating a Distribution List",1,10),
            "outlook_16" => array("Creating and editing a new task",1,10),
            "outlook_17" => array("Difference b/w Task list and To-Do list",1,5),
            "outlook_18" => array("Converting email into a task",1,15),
            "outlook_19" => array("Introduction to the Outlook calendar",2,25),
            "outlook_20" => array("Using the Schedule view",2,15),
            "outlook_21" => array("Adding and editing appointments",2,20),
            "outlook_22" => array("Scheduling recurring appointments",2,10),
            "outlook_23" => array("Scheduling events",2,10),
            "outlook_24" => array("Sending and responding to meeting invitations",2,45),
            "outlook_25" => array("Customizing the calendar",2,20),
            "outlook_26" => array("Creating your own mailbox subfolders",2,15),
            "outlook_27" => array("Moving items into folders",2,10),
            "outlook_28" => array("Searching & finding Outlook items",2,20),
            "outlook_29" => array("Adding Search Folders",2,20),
            "outlook_30" => array("Creating Notes",2,10),
            "outlook_31" => array("An overview of Outlook message formats",3,10),
            "outlook_32" => array("Creating and Using AutoSignatures for messages",3,15),
            "outlook_33" => array("Using the Out of Office Assistant",3,15),
            "outlook_34" => array("Utilizing message Voting buttons",3,20),
            "outlook_35" => array("Using and customizing Quick Steps",3,25),
            "outlook_36" => array("Creating rules for email",3,30),
            "outlook_37" => array("Setting folder permissions",3,30),
            "outlook_38" => array("Setting delegate status for folders",3,15),
            "outlook_39" => array("Accessing another user's folders",3,15),
            "outlook_40" => array("Creating a Personal Folder file (PST file) and subfolders",3,15),
            "outlook_41" => array("Archiving information",3,20),
            "outlook_42" => array("Mailbox maintenance techniques",3,15),
            "outlook_43" => array("Configuring Dial Up and Exchange Server Accounts",4,30),
            "outlook_44" => array("Adding new profiles",4,20),
            "outlook_45" => array("Overview of cached exchange mode",4,15),
            "outlook_46" => array("Creating and customizing views",4,30),
            "outlook_47" => array("Creating customized forms",4,30),
            "outlook_48" => array("Creating a vCard",4,20),
            "outlook_49" => array("Performing a Mail Merge using Outlook contact information",4,25),
            "outlook_50" => array("Importing/Exporting data",4,25),
            "outlook_51" => array("Customizing Outlook & Personal preferences",4,30)
        );
    }
    public function get_word_array()
    {
        return $word_array = array(
            "word_1"=>array("Introduction to the Word 2010 interface",1,25),
            "word_2"=>array("Basic Page Setup",1,15),
            "word_3"=>array("Creating a new document",1,10),
            "word_4"=>array("Entering and editing text",1,10),
            "word_5" => array("Navigation techniques in a document",1,15),
            "word_6" => array("Keyboard shortcuts",1,5),
            "word_7" => array("Basic and Advanced techniques for selecting text",1,15),
            "word_8" => array("Saving and closing documents",1,10),
            "word_9" => array("Getting help in Word",1,5),
            "word_10" => array("Moving and Copying text",1,15),
            "word_11" => array("Using the Live Preview feature to preview formatting",1,10),
            "word_12" => array("Formatting text in a document",1,20),
            "word_13" => array("Formatting paragraphs including spacing and indentation",1,20),
            "word_14" => array("Creating bulleted and numbered lists",1,25),
            "word_15" => array("Introduction to Document Themes",1,15),
            "word_16" => array("Creating and saving a custom Theme",1,10),
            "word_17" => array("Zooming in and out of a document",2,5),
            "word_18" => array("Inserting Headers & Footers",2,20),
            "word_19" => array("Working with document margins",2,15),
            "word_20" => array("Creating columns",2,20),
            "word_21" => array("Working with page & section breaks",2,25),
            "word_22" => array("Inserting a cover page from the Cover Page gallery",2,15),
            "word_23" => array("Using proofing tools (Spell/Grammar Check, Thesaurus)",2,10),
            "word_24" => array("Using & customizing the AutoCorrect features",2,10),
            "word_25" => array("Finding and replacing text within the Navigation Pane",2,20),
            "word_26" => array("Using and creating templates",2,20),
            "word_27" => array("Creating individual envelopes and labels",2,15),
            "word_28" => array("Printing your documents",2,20),
            "word_29" => array("Using the Page Setup area of the Backstage View",2,20),
            "word_30" => array("Sending Word documents as e-mail",2,10),
            "word_31" => array("Setting tabs in a document",3,45),
            "word_32" => array("Creating tables in a document",3,40),
            "word_33" => array("Formatting tables",3,15),
            "word_34" => array("Sorting and Calculating table data",3,15),
            "word_35" => array("Drawing tables in Word",3,15),
            "word_36" => array("Applying and displaying text & paragraph styles",3,30),
            "word_37" => array("Creating a custom style",3,15),
            "word_38" => array("Modify and delete a style",3,15),
            "word_39" => array("Using heading styles to create document outlines",3,20),
            "word_40" => array("Working with ClipArt & WordArt",4,25),
            "word_41" => array("Inserting Pictures",4,10),
            "word_42" => array("Applying Picture Styles",4,25),
            "word_43" => array("Using the Drawing Tools",4,20),
            "word_44" => array("Managing text and graphics",4,25),
            "word_45" => array("Writing equations and inserting mathematical symbols",4,15),
            "word_46" => array("Preparing a document for mail merge",4,20),
            "word_47" => array("Creating data sources for mail merge",4,15),
            "word_48" => array("Using existing data sources for mail merge",4,15),
            "word_49" => array("Merging data with a document",4,20),
            "word_50" => array("Sorting and filtering during a mail merge",4,10),
            "word_51" => array("Creating envelopes and labels with mail merge",4,25),
            "word_52" => array("Displaying the Developer Ribbon",5,5),
            "word_53" => array("Designing a form",5,30),
            "word_54" => array("Working with form fields",5,30),
            "word_55" => array("Using different versions of a document",5,20),
            "word_56" => array("Using highlights and comments in a document",5,20),
            "word_57" => array("Tracking changes in a document",5,25),
            "word_58" => array("Protecting documents",5,15),
            "word_59" => array("Creating a table of contents",5,15),
            "word_60" => array("Using footnotes and endnotes",5,10),
            "word_61" => array("Creating and Using bookmarks",5,15),
            "word_62" => array("Inserting citations and bibliographies",5,20),
            "word_63" => array("Creating an index",5,20),
            "word_64" => array("Recording and running a macro",6,45),
            "word_65" => array("Editing a macro",6,20),
            "word_66" => array("Creating buttons to run macros",6,15),
            "word_67" =>array( "Customizing the Ribbon",6,20),
            "word_68" => array("Creating hyperlinks within a Word document",6,15),
            "word_69" => array("Inserting objects and files into Word",6,25),
            "word_70" => array("Save Word document as a Web page",6,15),
            "word_71" => array("Converting Word Documents to .PDF",6,15),
            "word_72" => array("Introduction to SkyDrive",6,30)
        );
    }
	public function index()
	{
		$this->load->view('v_request',["excel_array"=>$this->get_excel_array(),"powerpoint_array"=>$this->get_powerpoint_array(),"word_array"=>$this->get_word_array(),"outlook_array"=>$this->get_outlook_array()]);
	}

    public function send_request()
    {
        $mail = new PHPMailer\PHPMailer\PHPMailer();

        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = "smtp.live.com";
        $mail->SMTPAuth = true;
        $mail->Username = "learnit.academy@hotmail.com";
        $mail->Password = "learnit11@@";
        $mail->Port = 25;

        $mail->From = "learnit.academy@hotmail.com";
        $mail->FromName = "Learn IT";

        $mail->addAddress("aghazal@sak1.com", "Abed Ghazal");
//        $mail->addAddress("hkhoudary8@hotmail.com", "Hytham Khoudary");

        $mail->isHTML(true);

        $mail->Subject = "Company request courses";
        $company_info = "<table style='border: 1px solid #dee2e6;width: 100%'>
                            <thead>
                                <tr>
                                    <th colspan='4' style='height: 35px;background-color: #f5f5f5'>
                                    Company Information
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style='font-size: 13px;font-weight: bold'>Company Name</td>
                                    <td colspan='2'>".$_POST['Company-name']."</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style='font-size: 13px;font-weight: bold'>Company Address</td>
                                    <td colspan='2'>".$_POST['Company-address']."</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style='font-size: 13px;font-weight: bold'>Company Email</td>
                                    <td colspan='2'>".$_POST['your_email']."</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style='font-size: 13px;font-weight: bold'>Phone Number</td>
                                    <td>".$_POST['phone']."</td>
                                    <td style='font-size: 13px;font-weight: bold;padding-left: 20px'>Fax Number</td>
                                    <td>".$_POST['fax']."</td>
                                </tr>
                                <tr>
                                    <td style='font-size: 13px;font-weight: bold'>Representative Name</td>
                                    <td colspan='2'>".$_POST['Representative-name']."</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style='font-size: 13px;font-weight: bold'>Representative Description</td>
                                    <td colspan='2'>".$_POST['Description']."</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style='font-size: 13px;font-weight: bold'>Representative Phone Number</td>
                                    <td colspan='2'>".$_POST['Representative-phone']."</td>
                                    <td></td>
                                </tr>
                            </tbody>
                         </table>";

        $course_info = "<table style='border: 1px solid #dee2e6;width: 100%'>
                            <thead>
                                <tr>
                                    <th colspan='4' style='height: 35px;background-color: #f5f5f5'>
                                    Course  Information
                                    </th>
                                </tr>
                            </thead>
                            <tbody>                              
                                <tr>
                                    <td style='font-size: 13px;font-weight: bold'>Platform Study</td>
                                    <td colspan='2'>".$_POST['platform-study']."</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style='font-size: 13px;font-weight: bold'>Place Study</td>
                                    <td colspan='2'>".$_POST['place-study']."</td>
                                    <td></td>
                                </tr>
                            </tbody>
                         </table>";

        $generated_excel = "";
        if(isset($_POST['excel_checkbox'])){
            $excel_array = $this->get_excel_array();
            $generated_excel .= '<table  style="border-collapse: collapse;border: 1px solid #dee2e6;width: 100%">
                                    <thead>
                                    <tr>
                                        <th colspan="4" style="height: 35px;background-color: #f5f5f5">
                                        Course Selection
                                        </th>
                                    </tr>
                                    <tr>
                                        <th style="border-top: 1px solid #dee2e6;">Excel</th>
                                        <th colspan="3" style="border-top: 1px solid #dee2e6;">Student No.<span style="color: #0a68b4"> '.$_POST['excel_std_no'].'</span></th>
                                    </tr>
                                    <tr>
                                        <th colspan="2" style="border-top: 1px solid #dee2e6;">Estimated Duration + Optional Topics:</th>
                                        <th colspan="2" style="border-top: 1px solid #dee2e6;">'.$_POST['excel-input-calculate-time'].'</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 70%;border: 1px solid #dee2e6;">Topic</th>
                                        <th style="width: 15%;border: 1px solid #dee2e6;">Origin Module</th>
                                        <th style="width: 15%;border: 1px solid #dee2e6;">Timing <span >(in Minutes)</span></th>
                                        <th style="border: 1px solid #dee2e6;">Type</th>                                       
                                    </tr>
                                    </thead>
                                    <tbody>';
            $counter = 0;
            foreach ($excel_array as $value){
                $counter++;
                if($_POST['excel_'.$counter.'_value'] != ''){
                    $generated_excel .= '<tr>
                                           <td style="border: 1px solid #dee2e6;">'.$value[0].'</td>
                                           <td style="border: 1px solid #dee2e6;text-align: center">'.$value[1].'</td>
                                           <td style="border: 1px solid #dee2e6;text-align: center">'.$value[2].'</td>
                                           <td style="border: 1px solid #dee2e6;text-align: center">'.$_POST['excel_'.$counter.'_value'].'</td>
                                        </tr>';
                }

            }
            $generated_excel .= '</tbody></table>';

        }





        $generated_word = "";
        if(isset($_POST['word_checkbox'])){
            $word_array = $this->get_word_array();
            $generated_word .= '<table  style="border-collapse: collapse;border: 1px solid #dee2e6;width: 100%">
                                    <thead>
                                    <tr>
                                        <th colspan="4" style="height: 35px;background-color: #f5f5f5">
                                        Course Selection
                                        </th>
                                    </tr>
                                    <tr>
                                        <th style="border-top: 1px solid #dee2e6;">Word</th>
                                        <th colspan="3" style="border-top: 1px solid #dee2e6;">Student No.<span style="color: #0a68b4"> '.$_POST['word_std_no'].'</span></th>
                                    </tr>
                                    <tr>
                                        <th colspan="2" style="border-top: 1px solid #dee2e6;">Estimated Duration + Optional Topics:</th>
                                        <th colspan="2" style="border-top: 1px solid #dee2e6;">'.$_POST['word-input-calculate-time'].'</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 70%;border: 1px solid #dee2e6;">Topic</th>
                                        <th style="width: 15%;border: 1px solid #dee2e6;">Origin Module</th>
                                        <th style="width: 15%;border: 1px solid #dee2e6;">Timing <span >(in Minutes)</span></th>
                                        <th style="border: 1px solid #dee2e6;">Type</th>                                       
                                    </tr>
                                    </thead>
                                    <tbody>';
            $counter = 0;
            foreach ($word_array as $value){
                $counter++;
                if($_POST['word_'.$counter.'_value'] != ''){
                    $generated_word .= '<tr>
                                           <td style="border: 1px solid #dee2e6;">'.$value[0].'</td>
                                           <td style="border: 1px solid #dee2e6;text-align: center">'.$value[1].'</td>
                                           <td style="border: 1px solid #dee2e6;text-align: center">'.$value[2].'</td>
                                           <td style="border: 1px solid #dee2e6;text-align: center">'.$_POST['word_'.$counter.'_value'].'</td>
                                        </tr>';
                }

            }
            $generated_word .= '</tbody></table>';

        }


        $generated_powerpoint = "";
        if(isset($_POST['powerpoint_checkbox'])){
            $powerpoint_array = $this->get_powerpoint_array();
            $generated_powerpoint .= '<table  style="border-collapse: collapse;border: 1px solid #dee2e6;width: 100%">
                                    <thead>
                                    <tr>
                                        <th colspan="4" style="height: 35px;background-color: #f5f5f5">
                                        Course Selection
                                        </th>
                                    </tr>
                                    <tr>
                                        <th style="border-top: 1px solid #dee2e6;">PowerPoint</th>
                                        <th colspan="3" style="border-top: 1px solid #dee2e6;">Student No.<span style="color: #0a68b4"> '.$_POST['powerpoint_std_no'].'</span></th>
                                    </tr>
                                    <tr>
                                        <th colspan="2" style="border-top: 1px solid #dee2e6;">Estimated Duration + Optional Topics:</th>
                                        <th colspan="2" style="border-top: 1px solid #dee2e6;">'.$_POST['powerpoint-input-calculate-time'].'</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 70%;border: 1px solid #dee2e6;">Topic</th>
                                        <th style="width: 15%;border: 1px solid #dee2e6;">Origin Module</th>
                                        <th style="width: 15%;border: 1px solid #dee2e6;">Timing <span >(in Minutes)</span></th>
                                        <th style="border: 1px solid #dee2e6;">Type</th>                                       
                                    </tr>
                                    </thead>
                                    <tbody>';
            $counter = 0;
            foreach ($powerpoint_array as $value){
                $counter++;
                if($_POST['powerpoint_'.$counter.'_value'] != ''){
                    $generated_powerpoint .= '<tr>
                                           <td style="border: 1px solid #dee2e6;">'.$value[0].'</td>
                                           <td style="border: 1px solid #dee2e6;text-align: center">'.$value[1].'</td>
                                           <td style="border: 1px solid #dee2e6;text-align: center">'.$value[2].'</td>
                                           <td style="border: 1px solid #dee2e6;text-align: center">'.$_POST['powerpoint_'.$counter.'_value'].'</td>
                                        </tr>';
                }

            }
            $generated_powerpoint .= '</tbody></table>';

        }


        $generated_outlook = "";
        if(isset($_POST['outlook_checkbox'])){
            $outlook_array = $this->get_outlook_array();
            $generated_outlook .= '<table  style="border-collapse: collapse;border: 1px solid #dee2e6;width: 100%">
                                    <thead>
                                    <tr>
                                        <th colspan="4" style="height: 35px;background-color: #f5f5f5">
                                        Course Selection
                                        </th>
                                    </tr>
                                    
                                    <tr>
                                        <th style="border-top: 1px solid #dee2e6;">Outlook</th>
                                        <th colspan="3" style="border-top: 1px solid #dee2e6;">Student No.<span style="color: #0a68b4"> '.$_POST['outlook_std_no'].'</span></th>
                                    </tr>
                                    <tr>
                                        <th colspan="2" style="border-top: 1px solid #dee2e6;">Estimated Duration + Optional Topics:</th>
                                        <th colspan="2" style="border-top: 1px solid #dee2e6;">'.$_POST['outlook-input-calculate-time'].'</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 70%;border: 1px solid #dee2e6;">Topic</th>
                                        <th style="width: 15%;border: 1px solid #dee2e6;">Origin Module</th>
                                        <th style="width: 15%;border: 1px solid #dee2e6;">Timing <span >(in Minutes)</span></th>
                                        <th style="border: 1px solid #dee2e6;">Type</th>                                       
                                    </tr>
                                    </thead>
                                    <tbody>';
            $counter = 0;
            foreach ($outlook_array as $value){
                $counter++;
                if($_POST['outlook_'.$counter.'_value'] != ''){
                    $generated_outlook .= '<tr>
                                           <td style="border: 1px solid #dee2e6;">'.$value[0].'</td>
                                           <td style="border: 1px solid #dee2e6;text-align: center">'.$value[1].'</td>
                                           <td style="border: 1px solid #dee2e6;text-align: center">'.$value[2].'</td>
                                           <td style="border: 1px solid #dee2e6;text-align: center">'.$_POST['outlook_'.$counter.'_value'].'</td>
                                        </tr>';
                }

            }
            $generated_outlook .= '</tbody></table>';

        }









        $mail->Body = $company_info.'<br/>'.$course_info.'<br/>'.$generated_excel.'<br/>'.$generated_word.'<br/>'.$generated_powerpoint.'<br/>'.$generated_outlook;
        $mail->AltBody = "This is the plain text version of the email content";

        if(!$mail->send())
        {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
        else
        {
            echo "Message has been sent successfully";
        }
	}
}
