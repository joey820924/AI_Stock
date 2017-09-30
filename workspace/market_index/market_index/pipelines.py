# -*- coding: utf-8 -*-

# Define your item pipelines here
#
# Don't forget to add your pipeline to the ITEM_PIPELINES setting
# See: http://doc.scrapy.org/en/latest/topics/item-pipeline.html
import mysql.connector

class MarketIndexPipeline(object):
	def __init__(self):
		self.cnx = mysql.connector.connect(user='USERNAME',host='127.0.0.1',database='c9')
		self.cursor = self.cnx.cursor()

	