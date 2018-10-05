node r.js -o baseUrl=Scripts name=main out=Scripts/main.min.js 
node r.js -o cssIn=Styles/Home.css out=Styles/main.min.css optimizeCss=standard
echo ;DEVMODE=false; >> Scripts/main.min.js
pause
exit