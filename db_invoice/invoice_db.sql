-- Tạo Cơ sở dữ liệu
Create Database IF NOT exists InvoiceDB;

-- Chỉ định cơ sở dữ liệu hiện hành
Use InvoiceDB;

-- Tạo bảng
Create Table IF NOT exists Customer
(
	CustomerID int primary key auto_increment,
    CustomerFirstName varchar(50),
    CustomerLastName varchar(50),
    CustomerCompany varchar(255),
    CustomerAddress varchar(255),
    CustomerProvince varchar(255)
);

-- Tạo Index 
Create Index CustomerFirstName_Index On Customer ( CustomerFirstName ASC);

Create Table Invoice(
	InvoiceNo int primary key auto_increment,
    InvoiceDate date,
    VAT double,
    CustomerID int,
    foreign key fk_invoice_cust (CustomerID) references Customer(CustomerID)
);
Create Table Product(
	ProductID int primary key auto_increment,
    ProductName varchar(255),
    UnitName varchar(50),
    UnitPriceIn double
);
Create Table InvoiceDetails(
	InvoiceDetailsID int primary key auto_increment,
    InvoiceNo int,
    SrNo int,
    ProductID int ,
    Quantity int,
    UnitPrice double,
    foreign key invoiceDetai_Invoive ( InvoiceNo) references Invoice(InvoiceNo),
    foreign key invoiceDetai_Product (ProductID) references Product(ProductID)
);

-- Nhap dữ liệu cho các bảng
Insert Into Customer(CustomerFirstName,CustomerLastName,CustomerCompany,
CustomerAddress,CustomerProvince)
Values('Hà', 'Nguyễn Thị','Hoa Đông','14 Phan Chu Trinh, Hải Châu','Đà Nẵng'),
		('Anh','Ngô Hoài','Thành Đô', '90 Quang Trung, Hải Châu','Đà Nẵng'),
        ('Trung','Hồ Đức','Thành Nhàn','21 Quang Trung, Tam Kỳ','Quảng Nam'),
        ('Ngọc','Nguyễn Thị Như','Sáng tạo', '15 Nguyễn Huệ','Thừa Thiên Huế'),
        ('Linh', 'Trần Ngọc','VietTech', '97 Lê Độ, Thanh Khê','Đà Nẵng')

Select * From Customer;


Insert Into Invoice (InvoiceDate, VAT, CustomerID)
Values('2020-01-01',0.05,1),
	('2020-03-12',0.05,1),
    ('2020-02-04',0.05,1),
    ('2020-01-15',0.05,2),
    ('2020-03-10',0.05,2),
    ('2020-03-21',0.05,3);

Select * From Invoice;

Insert Into Product(ProductName,UnitName,UnitPriceIn)
Values('Java cơ bản', 'Quyển',100000),
	('Quản trị Cơ sở dữ liệu với MySQL', 'Quyển',200000),
    ('Thiết kế web với HTML5 và CSS3', 'Quyển',150000),
    ('Học lập trình với ngôn ngữ C','Quyển', 120000),
    ('Lâp trình web với PHP & MySQL','Quyển', 150000);

Select * From Product;

Insert Into InvoiceDetails(InvoiceNo,SrNo,ProductID,Quantity,UnitPrice)
Values(1,1,1,2,120000),
	  (1,2,2,2,220000),
      (1,3,5,1,170000),
      (2,1,3,2,170000),
      (3,1,4,1,140000),
      (4,1,2,2,220000),
      (4,2,3,1,170000),
      (5,1,1,3,120000),
      (6,1,1,1,120000),
      (6,2,2,2,220000);
