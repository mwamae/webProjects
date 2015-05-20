var module = angular.module('app', []); 
module.service('ContactService', function () {
    var uid = 1;
    var contacts = [{
        id: 0,
        'name': 'Michael',
            'email': 'michaelwamae29@gmail.com',
            'phone': '0711123478'
    }];
     
    this.save = function (contact) {
        if (contact.id == null) {
            contact.id = uid++;
            contacts.push(contact);
            return true;
        } else {
            for (i in contacts) {
                if (contacts[i].id == contact.id) {
                    contacts[i] = contact;
                    return true;
                }
            }
        }
 
    }
    this.get = function (id) {
        for (i in contacts) {
            if (contacts[i].id == id) {
                return contacts[i];
            }
        }
 
    }
    this.delete = function (id) {
        for (i in contacts) {
            if (contacts[i].id == id) {
                contacts.splice(i, 1);
                return true;
            }
        }
    }
 
    this.list = function () {
        return contacts;
    }
});
 
module.controller('ContactController', function ($scope, ContactService) {
 
    $scope.contacts = ContactService.list();
 
    $scope.saveContact = function () {
        ContactService.save($scope.newcontact);
        $scope.newcontact = {};
    }
 
 
    $scope.delete = function (id) {
 
        ContactService.delete(id);
        if ($scope.newcontact.id == id) $scope.newcontact = {};
    }
 
 
    $scope.edit = function (id) {
        $scope.newcontact = angular.copy(ContactService.get(id));
    }
});
