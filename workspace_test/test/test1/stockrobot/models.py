from __future__ import unicode_literals

from django.db import models

class ind(models.Model):
    name = models.TextField(blank=True)
    value = models.TextField(blank=True)
    
    def __str__(self):
        return self.name
# Create your models here.
