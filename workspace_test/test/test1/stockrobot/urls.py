from django.conf.urls import patterns, include, url
from . import views

urlpatterns = [
    url(r'^user/(?P<username>\w{1,50})/cal/$',views.getCal),
    url(r'^user/(?P<username>\w{1,50})/$',views.getPrice),
    url(r'^user/(?P<username>\w{1,50})/grid/$',views.getgrid),
    url(r'^user/(?P<username>\w{1,50})/customer/$',views.getPrice2),
    url(r'^user/(?P<username>\w{1,50})/modelpredict/$',views.getModel),
]