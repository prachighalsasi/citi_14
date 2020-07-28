# -- coding: utf-8 --
"""
Created on Mon Jul 27 20:33:10 2020

@author: prach
"""
import random
import time
import mysql.connector


mydb=mysql.connector.connect(
        host="localhost",
        user="root",
        passwd = "",
        port="3308",
        database="citi_bridge"
        )

mycursor=mydb.cursor()
nse=[]
bse=[]
arb=[]
higher=[]
stock_name =['ADANIPORTS','ASIANPAINT','AXISBANK','BAJAJ-AUTO','BAJAJFINSV','BAJFINANCE','BHARTIARTL','BPCL','BRITANNIA','CIPLA','COALINDIA','DRREDDY','EICHERMOT','GAIL','GRASIM','HCLTECH','HDFC','HDFCBANK','HEROMOTOCO','HINDALCO','HINDUNILVR','ICICIBANK','INDUSINDBK	','INFRATEL','INFY','IOC','ITC','JSWSTEEL','KOTAKBANK','LT','M&M','MARUTI','NESTLEIND','NTPC','ONGC','POWERGRID','RELIANCE','SBIN','SHREECEM','SUNPHARMA','TATAMOTORS','TATASTEEL','TCS','TECHM','TITAN','ULTRACEMCO','UPL','VEDL','WIPRO','ZEEL']
#stock_name = ['a','b','c','d','e','f','g','h','i','j','k']
def rand(a):
    for i in range(0,50):
        a.append(round(random.uniform(1000, 2000), 2))

    
    #print("length is ",len(a))
    
def gen(nse,bse,arb,higher):
    n=0
    rand(nse)
    rand(bse)
    for j in range(len(nse)):
        if(nse[j]>bse[j]):
            higher.append("NSE")
            
            arb.append(round(((nse[j]-bse[j])/bse[j])*100,2))
            
        else:
            higher.append("BSE")
            
            arb.append(round(((bse[j]-nse[j])/nse[j])*100,2))
            
    
    lst5=list(zip(stock_name,nse,bse,arb,higher))
    
    sql = "replace into current (stock_name,nse,bse,diff_perc,higher) values (%s,%s,%s,%s,%s)"
    mycursor.executemany(sql,lst5)
    mydb.commit()
    print(lst5)
    nse=[]
    bse=[]
    lst5=[]
    arb=[]
    higher=[]
    
    while(n<5):
        time.sleep(10)
        
        gen(nse,bse,arb,higher)
        n+=1

gen(nse,bse,arb,higher)