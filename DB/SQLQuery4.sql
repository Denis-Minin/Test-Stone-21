USE [Valute]
GO
/****** Object:  StoredProcedure [dbo].[Show]    Script Date: 27.07.2020 11:36:51 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
ALTER procedure [dbo].[Show]
@code varchar(20),
@c_data date
as
select value from Table_1 where (c_data = @c_data) and (code = @code) 