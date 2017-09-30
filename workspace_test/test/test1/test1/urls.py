from django.conf.urls import patterns, include, url

from django.contrib import admin
admin.autodiscover()

urlpatterns = [
    # Examples:
    # url(r'^$', 'test1.views.home', name='home'),
    # url(r'^blog/', include('blog.urls')),
    url(r'^admin/', include(admin.site.urls)),
    url(r'',include('stockrobot.urls')),
    #url(r'^here/$',here),
    #url(r'^(\d{1,2})/plus/(\d{1,2})/$', add),
    #url(r'^([-+]?[0-9]+.[0-9]*)/([-+]?[0-9]+.[0-9]*)/([-+]?[0-9]+.[0-9]*)/([-+]?[0-9]+.[0-9]*)/([-+]?[0-9]+.[0-9]*)/([-+]?[0-9]+.[0-9]*)/([-+]?[0-9]+.[0-9]*)/([-+]?[0-9]+.[0-9]*)/([-+]?[0-9]+.[0-9]*)/$', getPrice),
    
]