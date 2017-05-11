# -*- coding: utf-8 -*-
#from __future__ import unicode_literals

from django.shortcuts import HttpResponse

# Create your views here.
def index(request):
    return HttpResponse("Bonjour et bienvenue dans l'index polls!")