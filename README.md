# Quick and Cusomized Travel Information Search



## Main Idea 
根據台灣城市之天氣、餐廳、交通狀況、犯罪率、交通運輸量等等資料，提供要前往
台灣的旅客一個介面查詢每個城市的上述資訊，給旅客們一個資訊統整的地方。如果
有想要觀光或是對某座城市的資料感興趣的人也可以來參考頁面上的資料。 

## Data Source: 
https://www.cwb.gov.tw/V8/C/W/County/index.html 中央氣象局縣市預報 

https://www.ris.gov.tw/app/portal/346 中華民國內政部戶政司人口統計資料

https://www.thb.gov.tw/cl.aspx?n=349 中華民國交通部公路總局 

https://ptx.transportdata.tw/PTX 公共運輸整合資訊平台 

## Search 
利用 search.php 實作 search 功能來搜尋裡面的資料 

![image](https://github.com/Heng-Henry/Quick-and-Customized-Information-Search/assets/90209480/921d2d2b-c52a-41dd-ad4c-cb9e784b413d)

## Insert
用 insert.php實作insert的功能來插入要被新增的餐廳資訊，只有餐廳可以透過使用者新增。

![image](https://github.com/Heng-Henry/Quick-and-Customized-Information-Search/assets/90209480/ee3b3093-8aa6-4f9b-bf49-3c61845ad0fb)

## Delete
如果有倒閉或停業的餐廳可以透過申報自行delete

![image](https://github.com/Heng-Henry/Quick-and-Customized-Information-Search/assets/90209480/fc5c2bb0-193d-44cb-8feb-12a54275bd24)

## Update 
透過update來更新其他的資料

## ER Model

![image](https://github.com/Heng-Henry/Quick-and-Customized-Information-Search/assets/90209480/1531db5b-2d2e-4361-af8a-4e744eaedb72)


## Application 
界面中間有一個可以搜尋的欄位，在欄位中輸入想了解的城市名稱，輸入後則會顯示
該城市之所有相關資訊，供使用者進行評估。搜索欄上方則是一個以海豚為形象的圖
標，搜索欄的左下方則有輸入新資料之欄位，使用者可以增加新的餐廳名稱與其所在
的城市。輸入新資料之欄位下方則是供使用者刪除之欄位，可以透過輸入餐廳名稱進
行刪除，這一欄位只能刪除用戶先前所創建過之餐廳資料。再往下則是更新資料的欄
位，可以對氣候、公車、捷運、暴力犯罪等資料甚至對資料表格當中的每一項
attributes 進行獨立變動更新，只需要在不希望更改之欄位輸入英文字母’a’即可。 
海豚圖標的右邊有一個選單，選單下有兩個小目錄，分別是聯絡資訊與關於我們創建
這個網頁的初衷和參與人員的一些資訊。 
以下六項為功能與操作方式的說明總結 
1. 搜索資料欄位：透過輸入城市名稱，列出該城市之所有資訊（氣候、犯罪率、
公車、捷運、餐廳） 
2. 插入資料欄位：透過輸入餐廳名稱與所在城市對資料庫進行資料增加 
3. 刪除資料欄位：透過輸入先前創建過之餐廳名稱進行刪除的動作 
4. 更新資料欄位：對於目前在資料庫中所存有的天氣、暴力犯罪、公車、捷運等
資料進行更新的操作 
5. 聯絡資訊欄位：給使用者提供一個可以聯絡的通道 
6. 關於我們的欄位：使用者可以通過閱讀‘關於我們’的資訊欄位，了解我們設計這
個網站時的想法與參與者的資訊 
