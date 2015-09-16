Upload Images to Microsoft Azure
=========

The sample shows how to upload the document images, scanned by [Dynamic Web TWAIN][1], to Microsoft Azure Web service.

Screenshots
-----------
![image](http://www.codepool.biz/wp-content/uploads/2014/10/azure_upload_start.png)
![image](http://www.codepool.biz/wp-content/uploads/2014/10/uploaded_image.png)

Resources
-----------

* [Dynamic Web TWAIN 11.1][2]
* [Microsoft Azure][3]

Blog
----
[How to Upload Scanned Images to Microsoft Azure Using Dynamic Web TWAIN][4]

How to Run:
-----------
1. download and instal Dynamic Web TWAIN
2. copy the Resource folder from the installation directory (like C:\Program Files (x86)\Dynamsoft\Dynamic Web TWAIN SDK 11.1 Trial)
3. open `QueryAzureSAS.php`, and specify `$accountName = ""; $accountKey = ""; $baseUrl = "";`
4. deploy the project to your Web server
5. visit `online_demo_scan.php` in your Web browser



[1]:http://www.dynamsoft.com/Products/WebTWAIN_Overview.aspx
[2]:http://www.dynamsoft.com/Downloads/WebTWAIN_Download.aspx
[3]:https://manage.windowsazure.com/
[4]:http://www.codepool.biz/cloud/upload-images-to-azure-storage.html
