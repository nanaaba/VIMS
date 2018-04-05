/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {

    var url = window.location.hostname + '/VIMS';

    getSettings();
    getTVISettings();
    function getSettings() {


        $.ajax({
            url: "../settings/all",
            type: "GET",
            dataType: 'json',
            success: function (response) {
                var data = response.data;
                var countries = data['countries'];
                var genders = data['genders'];
                var statusCodes = data['statusCodes'];
                var vehicleMakes = data['vehicleMakes'];
                var vehicleModels = data['vehicleModels'];
                var vehicleTypes = data['vehicleTypes'];

                console.log(data);
                $.each(countries, function (i, item) {

                    $('.countries').append($('<option>', {
                        value: item.code,
                        text: item.name
                    }));
                });

                //vehicleTypes
                $.each(vehicleTypes, function (i, item) {

                    $('.vehicletypes').append($('<option>', {
                        value: item.typeId,
                        text: item.name
                    }));
                });

                $.each(vehicleModels, function (i, item) {

                    $('.models').append($('<option>', {
                        value: item.modelId,
                        text: item.name
                    }));
                });
                $.each(vehicleMakes, function (i, item) {

                    $('.vehiclemakes').append($('<option>', {
                        value: item.makeId,
                        text: item.name
                    }));
                });

                $.each(statusCodes, function (i, item) {

                    $('.statuscodes').append($('<option>', {
                        value: item.code,
                        text: item.name
                    }));
                });

                $.each(genders, function (i, item) {

                    $('.gender').append($('<option>', {
                        value: item.genderId,
                        text: item.name
                    }));
                });
            }

        });
    }
    
    
      function getTVISettings() {


        $.ajax({
            url: "../tvisettings/all",
            type: "GET",
            dataType: 'json',
            success: function (response) {
                var data = response.data;
                var countries = data['countries'];
                var regimes = data['regimes'];
                var offices = data['offices'];
                var tviTypes = data['tviTypes'];
               
               
                console.log(data);
                $.each(countries, function (i, item) {

                    $('.country').append($('<option>', {
                        value: item.code,
                        text: item.name
                    }));
                });

                //vehicleTypes
                $.each(regimes, function (i, item) {

                    $('.regimes').append($('<option>', {
                        value: item.regimeId,
                        text: item.name
                    }));
                });

                $.each(offices, function (i, item) {

                    $('.offices').append($('<option>', {
                        value: item.officeCode,
                        text: item.name
                    }));
                });
                $.each(tviTypes, function (i, item) {

                    $('.tviTypes').append($('<option>', {
                        value: item.tviTypeId,
                        text: item.name
                    }));
                });

               
            }

        });
    }


});