from django.shortcuts import render

# Create your views here.
from django.http import HttpResponse
from svmutil import *
import os
import pandas as pd
import numpy as np
from stockstats import StockDataFrame as Sdf
import csv
from sklearn import linear_model

def construct_line( label, line ):
    new_line = []   
    if float( label ) == 0.0:
        label = "0"
    new_line.append( str(float(label) ))

    for i, item in enumerate( line ):
        new_item = "%s:%s" % ( i + 1, item )
        new_line.append( new_item )
    new_line = " ".join( new_line )
    new_line += "\n"
    return new_line

def convertf(input_file,output_file):
    label_index = 0
    i = open( input_file, 'rb' )
    o = open( output_file, 'wb' )

    reader = csv.reader( i ) 
    headers = reader.next()

    for line in reader:
        label = line.pop( label_index )

        new_line = construct_line( label, line )
        o.write( new_line )

def getPrice(request,username = None):
    code = request.GET.get("code")
    label = request.GET.get("label")
    all = ['macd','macds','macdh','kdjk','kdjd','kdjj','rsi_5','rsi_10','volume_delta','open_2_d','cr','cr-ma1','cr-ma2','cr-ma3','volume_-3,2,-1_max','volume_-3~1_min','open_2_sma','boll','boll_ub','boll_lb','wr_10','wr_6','cci','cci_20','tr','atr','dma','pdi','mdi','dx','adx','adxr','trix','trix_9_sma','vr','vr_6_sma']
    b = {}
    for i,j in enumerate(all):
        if request.GET.get(j):
            tmp = []
            tmp.append(float(request.GET.get(j)))
            b[str(j)] = tmp
    data = pd.DataFrame(b)
    problemname = "/home/ubuntu/workspace/test/test1/problemfile/prob_"+str(code)+".txt"
    data.to_csv(problemname,index=False)
    
    libproblemname = "/home/ubuntu/workspace/test/test1/problemfile/libproblem_"+str(code)+".txt"
    scaleproblemname = "/home/ubuntu/workspace/test/test1/problemfile/scalelibproblem_"+str(code)+".txt"
    
    MP = "/home/ubuntu/workspace/test/test1/modelfile/model_"+str(code)+".txt"
    m = svm_load_model(MP)
    
    
    
    convertf(problemname,libproblemname)
    #cwd = os.getcwd()
    
    os.chdir("/home/ubuntu/workspace/test/test1")
    y,x = svm_read_problem(libproblemname)
    p_label, p_acc, p_val = svm_predict(y, x, m)
    return HttpResponse(p_label)
    #return render(request,'stock/stock.html',{'p_label':p_label})

def getPrice2(request,username = None):
    code = request.GET.get("code")
    label = request.GET.get("label")
    all = ['macd','macds','macdh','kdjk','kdjd','kdjj','rsi_5','rsi_10','volume_delta','open_2_d','cr','cr-ma1','cr-ma2','cr-ma3','volume_-3,2,-1_max','volume_-3~1_min','open_2_sma','boll','boll_ub','boll_lb','wr_10','wr_6','cci','cci_20','tr','atr','dma','pdi','mdi','dx','adx','adxr','trix','trix_9_sma','vr','vr_6_sma']
    b = {}
    for i,j in enumerate(all):
        if request.GET.get(j):
            tmp = []
            tmp.append(float(request.GET.get(j)))
            b[str(j)] = tmp
    data = pd.DataFrame(b)
    problemname = "/home/ubuntu/workspace/test/test1/problemfile/probuser_"+str(code)+".txt"
    data.to_csv(problemname,index=False)
    libproblemname = "/home/ubuntu/workspace/test/test1/problemfile/libprobuser_"+str(code)+".txt"
    
    MP = "/home/ubuntu/workspace/test/test1/modelfile/modeluser_"+str(code)+".txt"
    m = svm_load_model(MP)
    
    
    
    convertf(problemname,libproblemname)
    #cwd = os.getcwd()
    
    os.chdir("/home/ubuntu/workspace/test/test1")
    y,x = svm_read_problem(libproblemname)
    p_label, p_acc, p_val = svm_predict(y, x, m)
    return HttpResponse(p_label)
    

def getCal(request,username = None):
    code = request.GET.get("code")
    all = ['macd','macds','macdh','kdjk','kdjd','kdjj','rsi_5','rsi_10','volume_delta','open_2_d','cr','cr-ma1','cr-ma2','cr-ma3','volume_-3,2,-1_max','volume_-3~1_min','open_2_sma','boll','boll_ub','boll_lb','wr_10','wr_6','cci','cci_20','tr','atr','dma','pdi','mdi','dx','adx','adxr','trix','trix_9_sma','vr','vr_6_sma']
    b = []
    for i in all:
        if request.GET.get(i):
            b.append(request.GET.get(str(i)))
    name = "/home/ubuntu/workspace/test/test1/orifile/"+str(code)+".txt"   
    sc = Sdf.retype(pd.read_csv(name))
    tmp = pd.DataFrame()
    tmp['target'] = sc['close'].shift(1)
    for j in b:
        tmp[j] = sc.get(j)
    tmp = tmp.fillna(method = 'ffill')
    tmp = tmp.fillna(method = 'bfill')    
    tmp = tmp.where(pd.notnull(tmp), tmp.mean(), axis='columns')
    calname = "/home/ubuntu/workspace/test/test1/calfile/cal_"+str(code)+".txt"
    tmp.to_csv(calname,index=False)
    libname = "/home/ubuntu/workspace/test/test1/libfile/lib_"+str(code)+".txt"
    convertf(calname,libname)
    rulename = "/home/ubuntu/workspace/test/test1/rulefile/rule_"+str(code)+".txt"
    scalename = "/home/ubuntu/workspace/test/test1/scalefile/scale_"+str(code)+".txt"
    os.chdir("/home/ubuntu/workspace/test/test1/libsvm-3.22/")
    params = "sudo ./svm-scale -s "+rulename+" "+libname+" > "+scalename
    os.system(params)
    os.chdir("/home/ubuntu/workspace/test/test1")
    return HttpResponse("done")

def getgrid(request,username = None):
    code = request.GET.get("code")
    log2cD = request.GET.get("log2cD")
    log2cU = request.GET.get("log2cU")
    stepc = request.GET.get("stepc")
    log2gD = request.GET.get("log2gD")
    log2gU = request.GET.get("log2gU")
    stepg = request.GET.get("stepg")
    log2pD = request.GET.get("log2pD")
    log2pU = request.GET.get("log2pU")
    stepp = request.GET.get("stepp")
    gridname = "/home/ubuntu/workspace/test/test1/gridfile/grid_"+str(code)+".txt"
    scalename = "/home/ubuntu/workspace/test/test1/scalefile/scale_"+str(code)+".txt"
    os.chdir("/home/ubuntu/workspace/test/test1/libsvm-3.22/tools/")
    params = "python grid2.py -log2c "+str(log2cD)+","+str(log2cU)+","+str(stepc)+" -log2g "+str(log2gD)+","+str(log2gU)+","+str(stepg)+" -log2p "+str(log2pD)+","+str(log2pU)+","+str(stepp)+" -out "+gridname+" -s 3 -t 2 "+scalename
    os.system(params)
    os.chdir("/home/ubuntu/workspace/test/test1/")
    
    calname = "/home/ubuntu/workspace/test/test1/calfile/cal_"+str(code)+".txt"
    
    modelname = "/home/ubuntu/workspace/test/test1/modelfile/modeluser_"+str(code)+".txt"
    a = pd.read_csv(calname)
    lens = a.shape[0]
    trainSize = int(0.8*lens)
    testSize = lens - trainSize
    y,x = svm_read_problem(scalename)
    
    
    data = pd.read_table(gridname,sep = " ",header = None)
    log2c = []
    log2g = []
    log2p = []
    mse = []

    for i in data.ix[:,0].values:
        log2c.append(i.strip("log2c="))
    for i in data.ix[:,1].values:
        log2g.append(i.strip("log2g="))
    for i in data.ix[:,2].values:
        log2p.append(i.strip("log2p="))
    for i in data.ix[:,3].values:
        mse.append(i.strip("mse="))
    data.ix[:,0] = pd.Series(log2c)
    data.ix[:,1] = pd.Series(log2g)
    data.ix[:,2] = pd.Series(log2p)
    data.ix[:,3] = pd.Series(mse)
    data.iloc[:,0] = data.iloc[:,0].apply(lambda x:int(float(x)))
    data.iloc[:,1] = data.iloc[:,1].apply(lambda x:int(float(x)))
    data.iloc[:,2] = data.iloc[:,2].apply(lambda x:int(float(x)))
    data = data[data.ix[:,3] == data.ix[:,3].min()].iloc[-1,:]
    data.iloc[0] = 2**int(data.iloc[0])
    data.iloc[1] = 2**int(data.iloc[1])
    data.iloc[2] = 2**int(data.iloc[2])
    parmas1 = '-c '+str(data.iloc[0])+" -s 3 -t 2 -g "+str(data.iloc[1])+" -p "+str(data.iloc[2])
    m = svm_train(y,x,parmas1)
    svm_save_model(modelname,m)
    
    return HttpResponse('done')
def post_list(request):

    return render(request, 'stock/c3.html', {})
# ---


def getModel(request,username = None):
    reg = linear_model.LinearRegression()
    calname = "/home/ubuntu/workspace/test/test1/calfile/cal_"+str(code)+".txt"
    a = pd.read_csv("/Users/joey/Documents/stockcal/cal/1215.txt")














