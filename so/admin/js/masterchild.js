$('#StudentTableContainer').jtable({
            title: 'Student List',
            paging: true, //Enable paging
            sorting: true, //Enable sorting
            defaultSorting: 'Name ASC',
            //openChildAsAccordion: true, //Enable this line to show child tabes as accordion style
            actions: {
                listAction: '/Demo/StudentList',
                deleteAction: '/Demo/DeleteStudent',
                updateAction: '/Demo/UpdateStudent',
                createAction: '/Demo/CreateStudent")'
            },
            fields: {
                StudentId: {
                    key: true,
                    create: false,
                    edit: false,
                    list: false
                },
                //CHILD TABLE DEFINITION FOR "PHONE NUMBERS"
                Phones: {
                    title: '',
                    width: '5%',
                    sorting: false,
                    edit: false,
                    create: false,
                    display: function (studentData) {
                        //Create an image that will be used to open child table
                        var $img = $('<img src="/Content/images/Misc/phone.png" title="Edit phone numbers" />');
                        //Open child table when user clicks the image
                        $img.click(function () {
                            $('#StudentTableContainer').jtable('openChildTable',
                                    $img.closest('tr'),
                                    {
                                        title: studentData.record.Name + ' - Phone numbers',
                                        actions: {
                                            listAction: '/Demo/PhoneList?StudentId=' + studentData.record.StudentId,
                                            deleteAction: '/Demo/DeletePhone',
                                            updateAction: '/Demo/UpdatePhone',
                                            createAction: '/Demo/CreatePhone'
                                        },
                                        fields: {
                                            StudentId: {
                                                type: 'hidden',
                                                defaultValue: studentData.record.StudentId
                                            },
                                            PhoneId: {
                                                key: true,
                                                create: false,
                                                edit: false,
                                                list: false
                                            },
                                            PhoneType: {
                                                title: 'Phone type',
                                                width: '30%',
                                                options: { '1': 'Home phone', '2': 'Office phone', '3': 'Cell phone' }
                                            },
                                            Number: {
                                                title: 'Phone Number',
                                                width: '30%'
                                            },
                                            RecordDate: {
                                                title: 'Record date',
                                                width: '20%',
                                                type: 'date',
                                                displayFormat: 'yy-mm-dd',
                                                create: false,
                                                edit: false
                                            }
                                        }
                                    }, function (data) { //opened handler
                                        data.childTable.jtable('load');
                                    });
                        });
                        //Return image to show on the person row
                        return $img;
                    }
                },
                //CHILD TABLE DEFINITION FOR "EXAMS"
                Exams: {
                    title: '',
                    width: '5%',
                    sorting: false,
                    edit: false,
                    create: false,
                    display: function (studentData) {
                        //Create an image that will be used to open child table
                        var $img = $('<img src="/Content/images/Misc/note.png" title="Edit exam results" />');
                        //Open child table when user clicks the image
                        $img.click(function () {
                            $('#StudentTableContainer').jtable('openChildTable',
                                    $img.closest('tr'), //Parent row
                                    {
                                    title: studentData.record.Name + ' - Exam Results',
                                    actions: {
                                        listAction: '/Demo/ExamList?StudentId=' + studentData.record.StudentId,
                                        deleteAction: '/Demo/DeleteExam',
                                        updateAction: '/Demo/UpdateExam',
                                        createAction: '/Demo/CreateExam'
                                    },
                                    fields: {
                                        StudentId: {
                                            type: 'hidden',
                                            defaultValue: studentData.record.StudentId
                                        },
                                        StudentExamId: {
                                            key: true,
                                            create: false,
                                            edit: false,
                                            list: false
                                        },
                                        CourseName: {
                                            title: 'Course name',
                                            width: '40%'
                                        },
                                        ExamDate: {
                                            title: 'Exam date',
                                            width: '30%',
                                            type: 'date',
                                            displayFormat: 'yy-mm-dd'
                                        },
                                        Degree: {
                                            title: 'Degree',
                                            width: '10%',
                                            options: ["AA", "BA", "BB", "CB", "CC", "DC", "DD", "FF"]
                                        }
                                    }
                                }, function (data) { //opened handler
                                    data.childTable.jtable('load');
                                });
                        });
                        //Return image to show on the person row
                        return $img;
                    }
                },
                Name: {
                    title: 'Name',
                    width: '20%'
                },
                EmailAddress: {
                    title: 'Email address',
                    list: false
                },
                Password: {
                    title: 'User Password',
                    type: 'password',
                    list: false
                },
                Gender: {
                    title: 'Gender',
                    width: '11%',
                    options: { 'M': 'Male', 'F': 'Female' }
                },
                CityId: {
                    title: 'City',
                    width: '12%',
                    options: '/Demo/GetCityOptions'
                },
                BirthDate: {
                    title: 'Birth date',
                    width: '15%',
                    type: 'date',
                    displayFormat: 'yy-mm-dd'
                },
                Education: {
                    title: 'Education',
                    list: false,
                    type: 'radiobutton',
                    options: { '1': 'Primary school', '2': 'High school', '3': 'University' }
                },
                About: {
                    title: 'About this person',
                    type: 'textarea',
                    list: false
                },
                IsActive: {
                    title: 'Status',
                    width: '12%',
                    type: 'checkbox',
                    values: { 'false': 'Passive', 'true': 'Active' },
                    defaultValue: 'true'
                },
                RecordDate: {
                    title: 'Record date',
                    width: '15%',
                    type: 'date',
                    displayFormat: 'yy-mm-dd',
                    create: false,
                    edit: false,
                    sorting: false //This column is not sortable!
                }
            }
        });
 
        //Load student list from server
        $('#StudentTableContainer').jtable('load');