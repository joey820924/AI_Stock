import subprocess
import os
import time,sched
s = sched.scheduler(time.time,time.sleep)
os.chdir("market_index")
def crawlmarket():
    
    subprocess.call("scrapy crawl market",shell=True)

def start():
    s.enter(30,1,crawlmarket,argument=())
    s.run()


for i in range(3):
    start()
    
