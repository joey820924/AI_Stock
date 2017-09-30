import scrapy
from market_index.items import MarketIndexItem
import sys
import mysql.connector

class MarketSpider(scrapy.Spider):
    
    name = "market"
    allowed_domains = ["https://tw.stock.yahoo.com"]
    start_urls = ["https://tw.stock.yahoo.com"]

    def parse(self,response):
        cnx = mysql.connector.connect(user='USERNAME',host='127.0.0.1',database='c9')
        cursor = cnx.cursor()
        Item = MarketIndexItem()
        cursor.execute('SELECT * from markets')
        data = cursor.fetchall()
        update = False
        if(data==[]):
        	update = True

        judge = ''
        for i in response.xpath('//*[contains(@class, "tbdw")]'):
            for k in ['1','2','3','4']:
                Item['point'] = i.xpath('div[1]/div['+k+']/table/tbody/tr/td[1]/text()').extract()[0]
                if(i.xpath('div[1]/div['+k+']/table/tbody/tr/td[3]/span/text()').extract()==[]):
                    Item['rate'] = i.xpath('div[1]/div['+k+']/table/tbody/tr/td[3]/text()').extract()[0]
                else:
                    Item['rate'] = i.xpath('div[1]/div['+k+']/table/tbody/tr/td[3]/span/text()').extract()[0]
                Item['name'] = i.xpath('div[1]/div['+k+']/table/tbody/tr/th/a/text()').extract()[0]
                Item['direction'] = i.xpath('div[1]/div['+k+']/table/tbody/tr/td[2]/span/i/text()').extract()[0]
                if(update==True):
                	cursor.execute('insert into markets (name,point,rate,direction) values(%s,%s,%s,%s)', (Item['name'],Item['point'],Item['rate'],Item['direction']))
                else:
                	cursor.execute('UPDATE markets SET point = '+str(Item['point'].encode('utf-8').strip())+',rate = '+str(Item['rate'].encode('utf-8').strip())+',direction = "'+str(Item['direction'].encode('utf-8').strip())+'" WHERE name = "'+Item['name'].encode('utf-8').strip()+'"')

                cnx.commit()
                yield Item

                
